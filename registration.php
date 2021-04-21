<?php
include_once("config.php");
     $name = $_POST['name'];
	
	$email =$_POST['email'];
	$password =$_POST['password'];

	if(empty($name) || empty($password) || empty($email) ) {

		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

	} 
    
    else {
		$result = mysqli_query($mysqli, "INSERT INTO registration (name,email,password) VALUES('$name','$email','$password')");

        if($result>0){

            echo "successfully adden";
            header("Location: loginpage.php");
        }
        else{
            echo "faild";
			
           }
    }

?>