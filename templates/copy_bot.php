<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Product of Team Atom">
    <meta name="author" content="Devcrud">
    <title>A Product of Team Atom</title>

    <script src="https://kit.fontawesome.com/070428bd88.js" crossorigin="anonymous"></script>

   <!-- font icons -->
   <link rel="stylesheet" href="{{ url_for('static', filename='css/') }}themify-icons.css">

   <!-- Bootstrap + Creative Studio main styles -->
   <link rel="stylesheet" href="{{ url_for('static', filename='css/') }}creative-studio.css">
   <style>

@import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
:root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --left-msg-bg: linear-gradient(to right, #f895b9, #f44183);
  --right-msg-bg: #ececec;
}
html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
 
.msger {
  margin-top: 65px;
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  max-width: 100%;
  border-radius: 10px;
  height: 100%;
  background: var(--msger-bg);
  box-shadow: 0px 4px 9px 0px rgb(0 0 0);
}
.msger-header {
  display: flex;
  justify-content: center;
  padding: 10px;
  border-radius: 10px 10px 0px 0px;
  background: #eee;
  color: #666;
}
.msger-header-title{
  display: flex;
  align-items: center;
}
.msger-header-title img{
  height: 4.5rem;
  width: auto;
}
.msger-header-title p{
  letter-spacing: 1px;
  font-size: 1.8rem;
  font-weight: bold;
}
.msger-chat {
  flex: 1;
  overflow-y: auto;
  padding: 10px;
}
.msger-chat::-webkit-scrollbar {
  width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
  background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
  background: #bdbdbd;
  border-radius: 10px;
}
.msg {
  display: flex;
  align-items: flex-end;
  margin-bottom: 10px;
}
.msg:last-of-type {
  margin: 0;
}
.msg-img {
  width: 60px;
  height: 60px;
  margin-right: 10px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
}
.msg-bubble {
  max-width: 350px;
  padding: 15px;
  border-radius: 15px;
  background: var(--left-msg-bg);
}
.msg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.msg-info-name {
  margin-right: 10px;
  font-weight: bold;
}
.msg-info-time {
  font-size: 0.85em;
}
.left-msg .msg-bubble {
  color: #fff;
  border-bottom-left-radius: 0;
}
.right-msg {
  flex-direction: row-reverse;
}
.right-msg .msg-bubble {
  background: var(--right-msg-bg);
  color: #000;
  border-bottom-right-radius: 0;
}
.right-msg .msg-img {
  margin: 0 0 0 10px;
}
.msger-inputarea {
  margin: 20px;
  display: flex;
  padding: 10px;
  background: #f44183;
  border-radius: 0px 0px 10px 10px;
}
.msger-inputarea * {
  padding: 5px;
  border: none;
  border-radius: 3px;
  font-size: 1em;
}
.msger-input {
  color: #fff !important;
  flex: 1;
  background: transparent;
  outline: none;
  border: 1px solid rgba(255, 255, 255, 0.7);
}
::placeholder { /* Most modern browsers support this now. */
   color:    #fff;
}
.msger-send-btn {
  margin-left: 10px;
  background: transparent;
  color: #fff;
  font-size: 1.5rem;
  cursor: pointer;
}
.msger-chat {
  background-color: #fcfcfe;
}

section.has-bg-img {
    padding: 135px 0 20px 0;
}

body {
  font-family: "Baloo 2", cursive;
        }

        .chat-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        #chat-log {
            max-height: 300px;
            overflow-y: auto; 
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 80%;
            padding: 8px;
            font-size: 16px;
        }

        button {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* GLOBAL STYLES */
 

        .animated-text {
      display: inline-block;
      font-size: 24px;
      font-weight: bold;
      opacity: 0;
      animation: animateText 2s linear forwards;
    }

    @keyframes animateText {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }


</style>
    
 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ url_for('static', filename='imgs/') }}logo.jpg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#Methodologies">Methodologies</a>
                    </li>
                     
                    <li class="nav-item">
                        <a class="nav-link" href="/#team">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="communitywall">Community Wall</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>

                    {% if session['email']  %}

                    <li class="nav-item">
                      <a class="nav-link" href="chat">{{session['fullname']}}</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="logout">Logout</a>
                  </li>                  

                  {% else %}
                  
                  <li class="nav-item">
                      <a class="nav-link" href="register">Register</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="login">Login</a>
                  </li>

                  {% endif %}
                     
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Page Navigation -->


    

    <!-- Fatcs Section -->
    <section class="has-bg-img bg-img-2">
        <div class="container text-center"> 
            <h6 class="section-title mb-6">Welcome {{session['fullname']}}, This is your dashboard!</h6>
                <div class="widget-2">
                     
                </div>
        </div>
    </section>
    
    <div class="container" style="margin-top: 60px;border-radius: 20px;
            box-shadow: 1px 4px 10px 0px rgb(98 9 94 / 70%);  padding: 30px;"> 
    <main class="msger-chat">
    <div class="msg left-msg">
            <div class="msg-img" style="background-image: url('/static/imgs/bot.png')"></div>
            <div class="msg-bubble">
                <div class="msg-info">
                  <div class="msg-info-name">BOT</div>
                  <div class="msg-info-time" id="currentTime"></div>
                </div>
                <div class="msg-text">
                  
                </div>
                
              <script>
                
                // JavaScript to animate text letter by letter
              const textElement = document.querySelector('.msg-text');
              const text = "Hi {{session['fullname']}}, I am the Therapeia BOT!! Go ahead and send me a message. 😄";
              let index = 0;

              function animateText() {
                if (index < text.length) {
                  textElement.textContent += text.charAt(index);
                  index++;
                  setTimeout(animateText, 50);
                }
              }

              animateText();
                
              </script>

              </div>
              </div>
        <div id="chat-log"></div>
        </main>
        <form class="msger-inputarea" onsubmit="sendMessage(event)">
            <input type="text" name="message" class="msger-input" placeholder="Enter your message...">
            <button type="submit" class="msger-send-btn"><i class="fa fa-paper-plane"></i></button>
        </form>
        
   
        
      </div>
    
     
      <section class="has-bg-img py-0" style="margin-top: 40px;">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">ABOUT US</h6>
                        </li>
                        <li class="list-body">
                            <a href="/" class="logo">
                                <img src="{{ url_for('static', filename='imgs/') }}logo.jpg">
                                
                            </a>
                            <p>A product of Team Atom, a group of 5 students from AIML term 3 </p> 
                            <p class="mt-3">
                                Copyright <script>document.write(new Date().getFullYear())</script> &copy; Team Atom</a>
                            </p>                   
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">USEFUL LINKS</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                                    <a href="#about">About Us</a>
                                    <a href="#Methodologies">Methodologies</a>
                                    <a href="#Graphs">Graphs and Charts</a>
                                    <a href="#team">Team</a>
                                    <a href="#contact">Contact</a>
                                </div>
                                 
                            </div>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">CONTACT INFO</h6>
                        </li>
                        <li class="list-body">
                            <p><i class="ti-location-pin"></i> Lambton College, Toronto</p>
                            <p><i class="ti-email"></i>  info@therapeia.com</p>
                            <div class="social-links">
                                <a href="https://github.com/developerc0858319/ProjectAtom" class="link" target="_blank"><i class="ti-github"></i> Go To GITHUB</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </section>




    

    <script>
        // Function to get element by selector
        function get(selector, root = document) {
            return root.querySelector(selector);
        }

        // Function to format date
        function formatDate(date) {
            const h = "0" + date.getHours();
            const m = "0" + date.getMinutes();
            return `${h.slice(-2)}:${m.slice(-2)}`;
        }

        // Function to generate random number
        function random(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }

        // Function to display bot's response
        function displayBotResponse(botResponse) {
            const botResponseContainer = document.createElement('div');
            botResponseContainer.classList.add('msg', 'left-msg');
            botResponseContainer.innerHTML = `
                <div class="msg-img" style="background-image: url('/static/imgs/bot.png')"></div>
                <div class="msg-bubble">
                    <div class="msg-info">
                        <div class="msg-info-name">BOT</div>
                        <div class="msg-info-time">${formatDate(new Date())}</div>
                    </div>
                    <div class="msg-text">
                        <span class="animated-bot-response"></span>
                    </div>
                </div>
            `;

            const msgerChat = get(".msger-chat");
            msgerChat.appendChild(botResponseContainer);

            
            // JavaScript to animate text letter by letter
              const textElement = document.querySelector('.animated-bot-response');
              const text = botResponse;
              let index = 0;

              function animateText() {
                if (index < text.length) {
                  textElement.textContent += text.charAt(index);
                  index++;
                  setTimeout(animateText, 50);
                }
              }

              animateText();
            
            






        }

        // Function to send user message and receive bot response
        function sendMessage(event) {
            event.preventDefault();
            const userInput = get(".msger-input").value;
            const chatLog = get("#chat-log");

            // Display user's question in the chat log
            chatLog.innerHTML += `
                <div class="msg right-msg">
                <div class="msg-img" style="background-image: url('/static/imgs/user.png')"></div>
                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">You</div>
                            <div class="msg-info-time">${formatDate(new Date())}</div>
                        </div>
                        <div class="question msg-text"></div>
                    </div>
                </div>
            `;

            
              // JavaScript to animate text letter by letter
              const textElement = document.querySelector('.question');
              const text = userInput;
              let index = 0;

              function animateText() {
                if (index < text.length) {
                  textElement.textContent += text.charAt(index);
                  index++;
                  setTimeout(animateText, 50);
                }
              }

              animateText();
     

            // Make an HTTP request to your bot's API endpoint
            fetch("http://10.51.217.213:5000/chatbot", { // Replace this with your server's URL
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ message: userInput }), // Use 'message' as the key
            })
                .then((response) => response.json())
                .then((data) => {
                    const botResponse = data.response;

                    // Display bot's response in the chat log
                    displayBotResponse(botResponse);

                    // Scroll to the bottom of the chat log
                    chatLog.scrollTop = chatLog.scrollHeight;
                })
                .catch((error) => {
                    console.error("Error:", error);
                });

            // Clear the user input after sending the message
            get(".msger-input").value = "";
        }
    </script>    
   
    
</body>
</html>
