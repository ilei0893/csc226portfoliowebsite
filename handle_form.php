<?php

	function validateStr($input){
		$input = trim($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);

		return $input;
	}
 
  //get json data and decode it
  $data = file_get_contents("accounts.JSON"); 
  $decodedData = json_decode($data, true);
  echo '<pre>';
  var_dump($decodedData);
  echo '</pre>';
  
  $keys = array_keys($decodedData);

	//$_GET and $_POST arrays are processed on the server
	//The values in $_GET and $_POST will be deleted after the request&response
	//How to display errors in the form with PHP
	$errors=[]; //array to contain the errors from the form.
	if(isset($_POST['submit'])){
    //Sanitize inputs
    $sanitizeduser = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $sanitizedPass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if(empty($_POST['username']) == true){
			$errors['username'] = 'Missing Username';
		}

		if(empty($_POST['password'])){
			$errors['password'] = 'Missing password';
		}
		//If there is no error, we redirect them to a different.
		//uRL paremters???
		//GET method, we don't need a form to send data to the server.
   foreach($decodedData as $account)
   {
     if($_POST['username'] === $account['username'] && $_POST['password'] === $account['password'])
     {
      if(count($errors) == 0)
      {
        $name = validateStr($_POST['username']);
        header('Location: welcome.php);
      }
    }
  }
}

?>