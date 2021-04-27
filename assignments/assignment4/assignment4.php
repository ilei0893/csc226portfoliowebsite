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

  <div class="part1">
    <h1>Part 1: Warm Up</h1>
    <h2>
      1. What is a database? Why would we implement it in our system/website?
    </h2>
    <p>
      A database is a place to store data. We should implement these in systems/websites if we want to store any kind of
      data such as accounts or user info.
    </p>
    <h2>
      2. What is the advantage of using a relational database management system?
    </h2>
    <p>
      Using a RDBMS is advanatagous because it has a simple design, has easy access to data, is flexible, and is
      maintainable.
    </p>
    <h2>
      3. List the different types of relations in a database.
    </h2>
    <p>
    <ul>
      <li>
        One-to-One
      </li>
      <li>
        One-to-Many
      </li>
      <li>
        Many-to-Many
      </li>
    </ul>
    </p>
    <h2>
      4. Explain the difference between key, primary key and foreign key.
    </h2>
    <p>
      A key is synonymous to an index, it identifies a record. A primary key is a specific type of unique key constraint
      that ensures data in a column is unique. <br> The difference between a primary key and a foreign key is that a
      foreign
      key creates a relation between two tables and often refers to the primary key in another table.
    </p>
  </div>
  <hr>

  <div class="part2">
    <h1>Part 2: Prepare SQL queries</h1>
    <h2>1. List the names of customers with credit limits of $7500 or less.</h2>
    <p>Select * <br>
      from customer <br>
      where credit_limit < 7500; </p>

        <h2>2. List all the orders placed by all customers. The output should have customer name, order number and order
          date.</h2>
        <p>select o.ORDER_NUM, o.ORDER_DATE, c.CUSTOMER_NAME <br>
          from customer as c, orders as o <br>
          where c.CUSTOMER_NUM = o.CUSTOMER_NUM;</p>

        <h2>3. How many customers have balances which are less than their credit limits? Hint: Use Count() function</h2>
        <p>select COUNT(CUSTOMER_NUM) <br>
          from customer <br>
          where BALANCE < CREDIT_LIMIT;</p>


            <h2>4. Get representatives with their number of orders that they helped each customer. The output should
              have rep_num, rep_name, customer_name and the count.</h2>
            <p>select r.REP_NUM, CONCAT(r.FIRST_NAME, " ", r.LAST_NAME) as REP_NAME, c.CUSTOMER_NAME, COUNT(c.REP_NUM)
              <br>
              from rep as r <br>
              inner join customer as c on r.REP_NUM = c.REP_NUM <br>
              GROUP BY r.REP_NUM, c.CUSTOMER_NAME <br>
              ORDER BY r.REP_NUM;
            </p>

  </div>
  <hr>


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