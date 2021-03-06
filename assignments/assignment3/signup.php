<?php 
  require 'handle_signup_form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />
  <title>Assignments</title>
</head>

<body style="background-color:#39bfa7;">


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a id="home" class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a id="Assignments" class="nav-link" href="../assignments.php">Assignments <span
              class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Allow letters, digits, period, and underscore -->
  <?php 
  $regex = "/^[a-zA-Z\d\.\_]+$/"; 
  ?>
  <div class="form">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
      <p>
        <label>Enter a username:
          <input type="text" name="username" value="<?php echo $_POST['username'] ?? ''; ?>">
          <small>
            <?php echo (isset($errors['username'])) ? $errors['username'] : ''; ?>
          </small>
        </label>
      </p>
      <p>
        <label>Enter a password:
          <input type="text" name="password">
          <small>
            <?php echo (isset($errors['password'])) ? $errors['password'] : ''; ?>
          </small>
        </label>
      </p>
      <p>
        <a href="assignment3.php">Go back</a>
      </p>

      <input type="submit" value="submit" name="submit">
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>