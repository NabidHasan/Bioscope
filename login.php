

<?php
    include_once("config.php");

	session_start();

     
	
	$email =$_POST['email'];
	$password =$_POST['password'];

	if( empty($password) || empty($email) ) {

		


		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

	} 
    
    else {
		$result = mysqli_query($mysqli, "SELECT*FROM registration where email='$email'");

		$user = $result->fetch_assoc();
		

        if($user['email']==$email & $user['password']==$password ||!empty($user)){
		
			$_SESSION["name"] = $user['name'];
			

            header("Location: indexx.php");
        }
        else{
            echo "Email or Password does not matching , pleas try again";
			


           }
    }





?>