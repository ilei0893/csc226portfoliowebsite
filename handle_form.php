<? php

  function validateStr($input){
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }

$errors = [];
if(isset($_POST['submit']))
{
  if(empty($_POST['email']) == true)
  {
    $errors['email'] = "Missing email";
  }

  if(empty($_POST['password']) == true)
  {
    $errors['password'] = "Missing password";
  }

  if(count($errors) == 0){
    $name = validateStr($_POST['username']);

    
    header('Location: welcome.php');
  }
}
?>