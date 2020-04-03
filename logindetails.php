<html>
<body>
<?php
$con=new mysqli("localhost","root","","music") or 
    die("Connection Failed");   
            $username=$_GET["username"];
            $password=$_GET["password"]; 
     $sql ="SELECT username, password FROM signupdetails WHERE username = ('$username') and password = ('$password')";
 $result=$con->query($sql);
 
 
 if($result->num_rows==1)
        { 
           // $_SESSION["logged_in"] = true; 
            //$_SESSION["username"] = $username; 
		
          echo "<center><h1>you are succesfully logged in</h1></center>";
          echo "<script>window.open('picklanguage.html','_self')</script>";       
		   }
            else
            {
                echo "<script>alert('The username or  password are incorrect!','_self')</script></h1>";
				
            }
$con->close();			
?>
</body>
</html>