<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mercedes-benz</title>
    <meta charset="utf-8">
	<style>
		*{
			margin: 0;
			padding: 0;
            box-sizing: border-box;
			font-family:'Josefin Sans' sans-serif;
		}

	  body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url(real.jpg);
        background-position: center;
        background-size: cover; 
      }
      .main{
        position: absolute;
        top: 0px;
        justify-content: space-between;
      }
      .logo{
        color: white;
        font-size: 28px;
        position: absolute;
        right: 800px;


    }
    nav{
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding-top: 40px;
     padding-left: 0%;
     padding-right: 0%;

     }
     nav ul li{
        list-style-type: none;
        display: inline-block;
        padding: 10px 20px;
     }
     nav ul li a{
      color: white;
      text-decoration: none;
      font-weight: bold;

     }
     nav ul li a:hover{
        color: black;
        transition: .3s;
     }
     button{
        border: none;
        background: black;
        padding: 12px 30px;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        font-size: 15px;
        transition: .4s;

     }
     button:hover{
        transform: scale(1.1);
        cursor: pointer;
     }
     .d{
      text-align: center;
      color: gray;
      font-family: 'Josefin Sans' sans-serif;
      margin-top: 500px;
     }
     .da{
      color: white;
      text-decoration: none;
      font-weight: bold;
     }

     .box {
        position: relative;
        width: 380px;
        height: 420px;
        background: black;
        border-radius: 8px;
        overflow: hidden;

     }
     .box:before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg, transparent,white, white);
        transform-origin:  bottom right;
        animation:  animate 6s linear infinite;
    }
    .box::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg, transparent,white, white);
        transform-origin:  bottom right;
        animation:  animate 6s linear infinite;
        animation-delay:  -3s;
    }
    @keyframes animate {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    .form{
        position: absolute;
        inset: 2px;
        border-radius: 8px;
        background:black;
        z-index: 10;
    }
    .form h2{
        color: white;
        font-weight: 500;
        text-align: center;
        letter-spacing: 0.1em;
    }
    .inputBox{
        position: relative;
        width: 300px;
        margin-top: 35px;
    }
    .inputBox input{
        position: relative;
        width: 100%;
        padding: 20px 10px 10px;
        background: transparent;
        border: none;
        outline: none;
        color: white;
        font-size: 1em;
        letter-spacing: 0.05em;  
        z-index: 10;
    }
    .inputBox span{
        position: absolute;
        left: 0;
        padding: 20px;
        font-size:  1em;
        color: #8f8f8f;
        pointer-events: none; 
        letter-spacing: 0.05em
        transition: 0.5s;
    }
     .inputBox i{
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%
        height:2px;
        background: white;
        border-radius: 4px;
        transition: 0.5s;
        pointer-events: none;
        
     }
     .links{
        display: flex;
        justify-content: space-between;

     }
     .links a{
        margin: 10px 0;
        font-size: 1em;
        color: white;
        text-decoration: none;

     }
     .links a:hover, 
     .links a:nth-child(2){
        color: gray;
     }
     input[type = "submit"]{
        border: none;
        outline: none;
        background: white;
        padding: 11px 25px;
        width: 100px;
        margin-top: 10px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;



     }
     
	</style>

</head>
<body>
    <div class="main">
        <nav>
        <h2 class="logo">Mercedes-Benz</h2>
        
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cars.html">Cars </a></li>
            <li><a href="project.html">About us </a></li>
            <li><a href="index.html">Services </a></li>
            <li><a href="contact_us.html">Contact us </a></li>
            
        </ul>
        
    </nav>
    </div>
    
	<div class="box">
        <form class="form" method="post" action="register.php">
          <?php include ('errors.php'); ?>
            <h2>Register</h2>
        <div class="inputBox">
            <input type="text" name="username" placeholder="Username" required="required" > <span></span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="email" name="email" placeholder="Email" required="required"> <span></span>
            <i></i>
        </div>
            <div class="inputBox">
            <input type="password" name="password" placeholder="Password" required="required"> <span></span>
            <i></i>
        </div>
        <div class="links"> 
            <a href="#"> Forgot password?</a>
            <a href="login.php"> Login</a>
    </div>
    <button type="submit" name="regist">Register</button>
    <div class="lg">
        <img style="width: 10%; position: absolute; top: 350px; left: 160px; "src="logo.jpg">
    </div>
	</form>
</div>

</body>
</html>

