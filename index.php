<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Responsive Php & Mysql Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <?php include 'menu.php'; ?>

  <!-- slider section -->


  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/project-image2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/project-image1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/project-image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  <!-- about section -->

  <section class="my-5" id="about">
    <div class="py-5">
      <h2 class="text-center">About Me</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="img/project-image4.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4 py-4">I am Rosebel Tech.</h2>
          <p class="py-3">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
          <a href="about.php" class="btn btn-outline-success">Check More</a>
        </div>
      </div>
    </div>
  </section>




  <!-- service section -->

  <section class="my-5" id="service">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/team3.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Mac Garueva</h4>
              <p class="card-text">Marketing Expert</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/team4.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Rossy Semuel</h4>
              <p class="card-text">Application Developer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/team5.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Man Josefa</h4>
              <p class="card-text">UI/UX Designer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Gallery section -->

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/team3.jpg" class="img-fluid pb-4">
        </div>
      </div>
      </div>
  </section>


<!-- contact section -->

  <section class="my-5" id="contact">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="phone" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Send Message</button>
      </form>
    </div>
  </section>

  <footer>
    <p class="text-center p-3 bg-dark text-light">Copyright &copy; 2021 | Developed by Rosebel Khan.</p>
  </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>