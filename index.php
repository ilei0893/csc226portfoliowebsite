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

  <title>Ivan Lei</title>
</head>

<body>
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

  <div class="parallax">
    <div class="parallax_text">I'm Ivan Lei.</div>
    <div class="parallax_text_sub">
      Im a New York City based Software Engineer. I have previous experience
      in developing full stack web applications and technologies I'm familiar
      with are PostgreSQL, Heroku, Express, and Ruby on Rails.
    </div>
  </div>

  <div className="row">
    <div className="nine columns main-col">
      <h2>About Me</h2>

      <p>
        I'm a 20 year old developer and I love to create things. When I'm not
        thinking about how I can top Elon Musk, I enjoy going to the gym,
        socializing with friends, and listening to music!
      </p>
      <div className="row">
        <div className="columns contact-details">
          <h2>Contact Details</h2>
          <p className="address">
            <span>Ivan Lei</span>
            <br />
            <span>ilei0893@gmail.com</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="works">
        <h2>Check out some of my works</h2>
        <div class="card text-center" style="width: 18rem">
          <img class="card-img-top" src="covid.png" alt="covid19" />
          <div class="card-body">
            <h5 class="card-title">COVID-19 Tracker</h5>
            <p class="card-text">
              A COVID-19 Tracker built using React. Shows statistics for people
              who have been infected, recovered, and died. Ability to view
              globally or by country.
            </p>
            <a href="https://ilei0893.github.io/Covid19Tracker/" class="btn btn-primary">Go!</a>
          </div>
        </div>
      </div>
    </div>
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