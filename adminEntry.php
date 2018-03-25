<html>
<head>
<title><ake test</title>
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>button{background-color: #00ffff;font-size: 20px;padding: 16px;border-radius: 8px;}</style>
</head>

<body>

<?php 

       $adminp=$_POST['adminp'];
	   if($adminp=="admin")
	   {
		   


	echo'<nav>
	<div class="nav-wrapper blue">
	<a href="" class="brand-logo" style="margin-left:15px">Online Quiz Portal</a>
	<ul id="nav-mobile" class="right hide-on-med-and-down">
	<li><a href="headpage.html">Home</a></li>
	<li><a href="#">Play Online Quiz</a></li>
	<li><a href="#">Feedback</a></li>
	<li><a href="signup.html">SignUp</a></li>
	<li><a href="login.html">Login</a></li>
	
	</ul>
	</div>
	</nav>
	<br>

<h4 style="color:grey; font-style:italic|bold; margin-left:15px">Create a test for :</h1>

<div class="carousel">
    <a class="carousel-item" href="makeandroid.html"><img src="android2.jpg"></a>
    <a class="carousel-item" href="makejava.html"><img src="java3.jpg"></a>
    <a class="carousel-item" href="makeaptitude.html"><img src="aptitude2.jpg"></a>
  </div>';
	   }
	   
	   else 
	   {
		   
		   echo'Enter the correct Password';
	   }
  ?>
  

 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script>$(document).ready(function(){
      $('.carousel').carousel();
    });  </script>
</body>
</html>