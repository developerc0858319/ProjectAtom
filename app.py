from flask import Flask, render_template, request, session, flash, redirect, url_for, jsonify
import mysql.connector
from datetime import datetime
import os
from flask_cors import CORS
import gpt_2_simple as gpt2
import re

app = Flask(__name__)
CORS(app)

model_dir = 'C:\wamp64\www\neethu\ChatBot\checkpoint\checkpoint\run1'

app.secret_key = os.urandom(24)


def get_session():
    # Get or create the TensorFlow session within the Flask app context
    if not hasattr(app, 'gpt2_session'):
        app.gpt2_session = gpt2.start_tf_sess()
        gpt2.load_gpt2(app.gpt2_session, model_dir=model_dir)
    return app.gpt2_session

def generate_response(user_input):
    max_tokens = 200
    temperature = 0.7

    session = get_session()
    response = gpt2.generate(session, prefix=user_input, length=max_tokens, temperature=temperature, return_as_list=True)[0]
    sentences = re.split(r'(?<=[.!?])\s', response, maxsplit=5)
    return ' '.join(sentences[:5])


@app.route('/chatbot', methods=['POST'])
def chatbot():
    data = request.get_json()
    user_input = data['message']
    response = generate_response(user_input)

    if response.lower().startswith(user_input.lower()):
        response = response[len(user_input):].lstrip('?.,!')

    return jsonify({'response': response})


@app.route('/')
def home():
    return render_template('index.html')

@app.route('/chat')
def chat():
    if 'email' in session:
        # Replace with your logic to load the user-specific dashboard data
        message = "Welcome, {session['email']}! This is your chatspace."
        if 'message' in request.args:
            message = request.args['message']
        return render_template('chat.php', message1=message)
    else:
        message = "Please login to chat with the Bot"
        if 'message' in request.args:
            message = request.args['message']
        return render_template('login.php', message1=message)

@app.route('/communitywall')
def communitywall():
    return render_template('communitywall.html')

@app.route('/register')
def register():
    return render_template('register.php')

@app.route('/login')
def login():
    return render_template('login.php')

@app.route('/logout')
def logout():
    session.pop('email', None)
    session.pop('fullname', None)
    message = "Successfully logged out"
    if 'message' in request.args:
         message = request.args['message']
    return render_template('login.php', message1=message)


@app.route('/registersubmit', methods=['POST'])
def submit():

    mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="therapeia"
)
    
    # Get form data
    fullname = request.form['fullname']
    email = request.form['email']
    mobile = request.form['mobile']
    gender = request.form['gender']
    password = request.form['password']
    now = datetime.now()
    created = now.strftime("%Y-%m-%d %H:%M:%S")
    
    # Create a cursor object to execute SQL queries
    cursor = mydb.cursor()
    
    # Execute the SQL query to insert data into the table
    statement = f"SELECT * from registration WHERE email='{email}';"
    cursor.execute(statement)
    results = cursor.fetchone()

    if (results ==None):
        # Execute the SQL query to insert data into the table
        sql = "INSERT INTO registration (fullname, gender, email, mobile, password, created) VALUES (%s, %s, %s, %s, %s, %s)"
        val = (fullname, gender, email, mobile, password, created)
        cursor.execute(sql, val)
        
        # Commit the changes to the database
        mydb.commit()
        
        # Close the cursor and database connection
        cursor.close()
        mydb.close()
        message = "Registration Successfull, please login to continue"
        if 'message' in request.args:
            message = request.args['message']
    else:
        message = "This email id is already registered, please Login"
        if 'message' in request.args:
            message = request.args['message']
     
    return render_template('login.php', message=message)


@app.route('/loginsubmit', methods=['POST'])
def loginsubmit():

    mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="therapeia"
)
    
    # Get form data
    email = request.form['email']
    password = request.form['password']
    
    # Create a cursor object to execute SQL queries
    cursor = mydb.cursor()
    
    # Execute the SQL query to insert data into the table
    statement = f"SELECT fullname from registration WHERE email='{email}' AND password = '{password}';"
    cursor.execute(statement)
    results = cursor.fetchone()

    if (results ==None):        
        cursor.close()
        mydb.close()
        message1 = "Login failed, Username or Password is wrong, try again"
        if 'message' in request.args:
            message = request.args['message']
        return render_template('login.php', message1=message1)
        
    else:  
        fullname =  results[0]
        session['email'] = request.form['email']    
        session['fullname'] = fullname   
        cursor.close()
        mydb.close()
        message2 = "Login Successfull, you can now talk to our Therapeia BOT."
        if 'message' in request.args:
            message = request.args['message']
        return render_template('chat.php', message2=message2)

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5000, debug=True, threaded=True)

