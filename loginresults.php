<html>
<head>
      <title>Login</title>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
       
    <body>
	
	<!-- Navigation Drawer -->
	<nav>
	<div class="nav-wrapper blue">
	<a href="" class="brand-logo" style="margin-left:15px">Online Quiz Portal</a>
	<ul id="nav-mobile" class="right hide-on-med-and-down">
	<li><a href="headpage.html">Home</a></li>
	<li><a href="#">Play Online Quiz</a></li>
	<li><a href="#"><i class="material-icons">account_box</i></a></li>
	<li><a href="#"><?php $username=$_POST['username']; echo $username;?></a></li>
	
	
	</ul>
	</div>
	</nav>
	<br>
	
	<!-- Name of Page -->
	<h4 style="color:grey; font-style:italic|bold; margin-left:15px">Play Online Quiz with Ankit</h1>
	
	
	
       
 <?php
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	 if(!get_magic_quotes_gpc())
        {
            $username=addslashes($username);
            $password=addslashes($password);
			
        }
	
	 @$db=new mysqli('localhost','root','ankit','quiz');
        
        //Checking the connection
        if(mysqli_connect_errno())
        {
            echo'Error:Could not connect to database. Please try again later! ';
            exit;
        }
		
		// $query = "SELECT * FROM `tablename` WHERE `columnname` LIKE '%{$variable}%'";
		
		$query1="SELECT Username FROM signup WHERE Username = '$username' ";
		$result = $db->query($query1);
		
      $exists = $result->num_rows;
     if($exists) {
		 
		 $query2="SELECT Password FROM signup WHERE Username = '$username'";
		 $verify = $db->query($query2);
		 
		 $row1=$verify->fetch_assoc();
		 if($row1['Password']==$password)
		 {
		    // do your stuff
					 
					
	   
		   $row2=$result->fetch_assoc();
		    echo '<div class="carousel">
    <a class="carousel-item" href="androidques.php"><img src="android2.jpg"></a>
    <a class="carousel-item" href="javavques.html"><img src="java3.jpg"></a>
    <a class="carousel-item" href="aptitudeques.html"><img src="aptitude2.jpg"></a>
  </div>';
		   
		   
	
	   
					
         }
		 
		 else {
			 echo 'Please enter the correct password';
		 exit;   }
		 
	  } 
	 
		 
 else {
	 
    echo "Please Signup to our website";
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

      
	?>