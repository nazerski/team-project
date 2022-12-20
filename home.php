<!DOCTYPE html>
<html>
<head>
	<title>Mercedes-benz</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family:'Josefin Sans' sans-serif;
		}

	.main{
		height: 100%;
		width: 100%;
		background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(me.jpg);
		background-position: center;
		background-size: cover;
		position: absolute;
	}
	.logo{
		color: white;
		font-size: 28px;

	}
	nav{
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding-top: 40px;
     padding-left: 10%;
     padding-right: 10%;

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
		<a href="Login.php" class="da">Login</a>
	</nav>
	<h4 class="d"> Mercedes-Benz - is most famous car in the world. Drive it!</h4>
	
	
</div>

</body>
</html>