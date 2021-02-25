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
          <a id="home" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a id="Assignments" class="nav-link" href="assignments.php">Assignments <span
              class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="php introduction">
    <h1>
      PHP Introduction
    </h1>
    <ul>
      <li>
        PHP stands for Hypertext Preprocessor.
      </li>
      <li>
        PHP is a widely-used open source general-purpose scripting language that is
        used for web development and can be embedded into HTML.
      </li>
    </ul>
  </div>
  <br>
  <br>

  <div class="php basics">
    <h1>
      PHP basics
    </h1>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Numbers</th>
          <th scope="col">Results</th>
        </tr>
      </thead>
      <tbody>
        <?php
          for($int = 1; $int <= 100; $int++)
            {
              echo "<tr>";
              echo "<th>";
              echo "$int";
              echo "<td>";
              if($int % 2 === 0)
                echo "even";
              else
                echo "odd";
              echo "</td>";
              echo "</th>";
              echo "</tr>";
            }
          ?>
      </tbody>
    </table>
  </div>
  <br>
  <br>


  <div class="php arrays">
    <h1>
      PHP arrays
    </h1>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Calories</th>
        </tr>
      </thead>
      <h5>
        foreach array
      </h5>
      <tbody>
        <?php
          $fruits = array("apple"=>"20", "orange"=>"35", "pear"=>"50", "banana"=>"100", "strawberry"=>"5");
          arsort($fruits);
          echo "Sort an array in reverse order and maintain index association.";
          foreach($fruits as $name => $calories)
          {
            echo "<tr>";
            echo "<th>";
            echo "$name";
            echo "<td>";
            echo "$calories";
            echo "</td>";
            echo "</tr>";
            echo "</th>";
          }
        ?>
      </tbody>
    </table>
    <br>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Calories</th>
        </tr>
      </thead>
      <tbody>
        <h5>
          Descending in reverse order
        </h5>
        <?php
          krsort($fruits);
          echo "You can use the krsort function to sort keys in descending order.";
          foreach($fruits as $name => $calories)
          {
            echo "<tr>";
            echo "<th>";
            echo "$name";
            echo "<td>";
            echo "$calories";
            echo "</td>";
            echo "</tr>";
            echo "</th>";
          }
        ?>
      </tbody>
    </table>
    <br>
    <h5>
      Calculating total calories
    </h5>
    <?php
    $total = 0;
    foreach($fruits as $name => $calories)
    {
      echo "total calories is: $total calories";
      $total += $calories;
      echo "<br>";
    }
    echo "Cumulative total is: $total calories";
    ?>
  </div>
  <br>
  <br>

  <h5>Users array</h5>
  <?php

    $users = array(
      1 => array("users1" => "password1"),
      2 => array("users2" => "password2"),
      "3" => array("users3" => "password3"),
      array("users4" => "password4"),
    );
    var_dump($users);
    echo "<br>";
    echo "The users array is an associative array. Each key within the array is assigned another array as a value.";
    echo "<br>";
    echo "<br>";
?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach($users as $number => $info)
    {
      foreach($info as $id => $password)
      {
        echo "<tr>";
        echo "<th>";
        echo "$id";
        echo "<td>";
        echo "$password";
        echo "</td>";
        echo "</tr>";
        echo "</th>";
      }
    }
?>
    </tbody>
  </table>
  <br>
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