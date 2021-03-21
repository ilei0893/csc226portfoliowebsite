<?php
 

	//$_GET and $_POST arrays are processed on the server
	//The values in $_GET and $_POST will be deleted after the request&response
	//How to display errors in the form with PHP
	$errors=[]; //array to contain the errors from the form.
  $regex = "/^[a-zA-Z\d\.\_]+$/";  //Allow characters, digits, periods, and underscores
  $username = "";
  $password = "";
	if(isset($_POST['submit'])){

    if(empty($_POST['username']) == true){
			$errors['username'] = 'Missing Username';
		}

		if(empty($_POST['password'])){
			$errors['password'] = 'Missing password';
		}

    //Checks for valid username and password.
    if(preg_match($regex,$_POST['username']) ? $username = $_POST['username'] : 	$errors['username'] = 'Invalid Username');
    if(preg_match($regex,$_POST['password']) ? $password = $_POST['password'] : 	$errors['password'] = 'Invalid password');
    


    if(count($errors) == 0)
    {
      //Get JSON data, decode, add new account, update JSON, and redirect
      $newAcc = array("username" => $username, "password" => $password);
      $data = file_get_contents("accounts.JSON"); 
      $decodedData = json_decode($data, true);
      array_push($decodedData, $newAcc);
      file_put_contents("accounts.JSON", json_encode($decodedData,true));
      header("Location: http://163.238.35.165/~lei/portfolio/assignments/assignment3/assignment3.php?success=1");
    }

}

?>