<!DOCTYPE html>
<html>
<head>
<title><ake test</title>


<?php

@ $db=new mysqli('localhost','root','ankit','quiz');
        
        //Checking the connection
        if(mysqli_connect_errno())
        {
            echo'Error:Could not connect to database. Please try again later! ';
            exit;
        }
		
	function renderques($i){
		
	    
		$query1="select * from android where Sno='$i' ";
		$result=$db->query($query1);
		$row1=$result->fetch_assoc();
		
		$ques=$row1['Question'];
		$opa=$row1['a'];
		$opb=$row1['b'];
		$opc=$row1['c'];
		$opd=$row1['d'];
		$ans=$row1['Result'];
		
	}
		
		
	  ?>  
			
<textarea cols="50" rows="5" style="border:dotted 2px orange;"><?php echo $ques ?></textarea> 


<form method="post" action="">
    
  <input type="radio" name="gender" value="opa"><?php echo $opa ?><br>
  <input type="radio" name="gender" value="opb"><?php echo $opb ?><br>
  <input type="radio" name="gender" value="opc"><?php echo $opc ?><br>
  <input type="radio" name="gender" value="opd"><?php echo $opd ?><br><br>
  <input type="submit" name="submit" value="submit" onclick="submitans()">  
  
  </form>
  
  <?php 
  
  function submitans(){
	  
	  echo 'your ans submitted';
	  
  }
  ?>
  
  

</body>
</html>