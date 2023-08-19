<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Product of Team Atom">
    <meta name="author" content="Devcrud">
    <title>A Product of Team Atom</title>
   <!-- font icons -->
   <link rel="stylesheet" href="{{ url_for('static', filename='css/') }}themify-icons.css">

   <!-- Bootstrap + Creative Studio main styles -->
   <link rel="stylesheet" href="{{ url_for('static', filename='css/') }}creative-studio.css">
   <style>

    /* Bordered form */
    form {
      border: 3px solid #f1f1f1;
    }
    
    /* Full-width inputs */
    input[type=text], input[type=password] , input[type=number], input[type=select]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    select
    
    {width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;}

    
    
    /* Set a style for all buttons */
    button {
      background-color: #ff214f;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    /* Add a hover effect for buttons */
    button:hover {
      opacity: 0.8;
    }
    
    /* Extra style for the cancel button (red) */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #ff214f;
    }
    
    /* Center the avatar image inside this container */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }
    
    /* Avatar image */
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    /* Add padding to containers */
    .container {
      padding: 30px;
    }
    
    /* The "Forgot password" text */
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
      .cancelbtn {
        width: 100%;
      }
    
      
    }

            
section.has-bg-img  {
    padding: 140px 0 50px 0;
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
            <h6 class="section-title mb-6">Registration</h6>
                <div class="widget-2">
                     
                </div>
        </div>
    </section>


    <form action="registersubmit" method="post">
      
    
    
      <div class="container">

        <label for="uname"><b>Full Name</b></label>
        <input type="text" placeholder="Enter Full Name" name="fullname" required>

        <label for="uname"><b>Mobile Number</b></label>
        <input type="number" placeholder="Enter Mobile Number" name="mobile" required minlength="12">

        <label for="gender"><b>Gender</b></label>
        <select name="gender" id="cars">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="NA">NA</option>
        </select>
<br>
        <label for="uname"><b>Email ID</b></label>
        <input type="text" placeholder="Email ID" name="email" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    
        <button type="submit">Register</button>
        
          <span class="psw">Already a member? <a href="login">Login now</a></span>
        
      </div>
    
     
    </form>


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

    <a href="chat" class="chatwithme">
        <div>
           
                <img src="{{ url_for('static', filename='imgs/') }}chatwithme.png" alt="" class="img-fluid shake">
              
        </div>
      </a>
     
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
   
    
</body>
</html>
