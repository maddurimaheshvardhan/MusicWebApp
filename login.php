<?php
$con=new mysqli('localhost','root','','music') or 
    die("Connection Failed");   
            $username=$_POST["username"];
            $password=$_POST["password"]; 
     $sql ="SELECT username, password FROM register WHERE username = '".$username."' and password = '".$password."'";
 $result=$con->query($sql);
 
 
 if($result->num_rows==1)
        { 
           // $_SESSION["logged_in"] = true; 
            //$_SESSION["username"] = $username; 
		
          echo "<center><h1>you are succesfully logged in</h1></center>";
 echo "<script>window.open('login.html','_self')</script>";        
		   }
            else
            {
                echo "<script>alert('The username or  password are incorrect!')</script></h1>";
            }
 
	

?>