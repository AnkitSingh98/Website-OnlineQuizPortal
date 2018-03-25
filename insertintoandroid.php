<html>
<head>
      <title>Search results</title>
</head>
       
    <body>
       
 
 <?php
	
	$question=$_POST['question'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$ans=$_POST['result'];
	
	 if(!get_magic_quotes_gpc())
        {
            $question=addslashes($question);
            $a=addslashes($a);
			$b=addslashes($b);
			$c=addslashes($c);
			$d=addslashes($d);
			$ans=addslashes($ans);
			
        }
	
	 @ $db=new mysqli('localhost','root','ankit','quiz');
        
        //Checking the connection
        if(mysqli_connect_errno())
        {
            echo'Error:Could not connect to database. Please try again later! ';
            exit;
        }
		$query="INSERT INTO android VALUES ('','$question','$a','$b','$c','$d','$ans')";
		$result=$db->query($query);
		
		if ($result=== TRUE) {
    echo "Your Question is added to the database";
}

 else {
    echo "Error: " . $query. "<br>" . $db->error;
}

	
	?>
	