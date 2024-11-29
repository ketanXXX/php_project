<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">

  <title>The Dream Basil Paradise</title>
</head>

<style>
  .row{
    background-color:black;
  }
  .end{
    background-color:grey;
  }
  .navbar-nav {
    background-color:white;
  }
  .connn {
    background-color:black;
  }
  .navbar-toggler{
    background-color:whitesmoke;
  }
  .container-fluid{
    background-color:white;
  }
  .splitter{
    background-color:black;
  }
  .g-0{
    background-color:black;
  }
  .row{
    background-color:grey;
  }

  .card{
    background-color:black;
  }
  .container text-center text-md-start mt-5{
    background-color:black;
  }
  .nav-link {
    color: white;;
  
}
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="logo.png" alt="" width="150" height="120">
          </a>
          
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
               
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Resort Booking
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="ecr.php">ECR</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="pondi.php">Pondicherry</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="wayanadu.php">Wayanad</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="munnar.php">Munnar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="varkala.php">Varkala</a></li>
                  </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vehicles
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="vehiclebooking.php">Car Rent/Sales</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="vehiclebookingBike.php">Bike Rent/Sales</a></li>
            </ul>
          </li>
         
          </li>
          
            
            
        </ul>
      </div>
    </div>
  </nav>


  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="./ecr/ecr-1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-5 fs-3 text-uppercase">Discover the hidden world<br></p>
          <h1 class="display-1 fw-bolder text-capitalize"><br>The dream basil paradise</h1>
          
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="./kodaikanal/kodaikanal-2.jpeg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">50+ Villas and Guest Houses</p>
          <p class="display-1 fw-bolder text-capitalize">100% Satisfaction</p>
          
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="./kodaikanal/kodaikanal-3.jpeg" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">Escape to Paradise</p>
          <p class="display-1 fw-bolder text-capitalize">Your Dream Resort Awaits!</p>
         
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="splitter">
    <div class="connn" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./hero/demo-1.jpeg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Discover 50+ luxurious villas for your ultimate getaway</p>
            <h4><p class="card-text">Guaranteed 100% satisfaction</p></h4>
            
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <h3>Get The Best Service Provided By THE DREAM BASIL PARADISE,
        Make Your Day Special With Your Loved Ones.
      </h3>
    </section>
  </section>





  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;font-size: x-large;">Vision</h5>
          <p class="card-text">The dream basil paradise will lead the way to the future mobility, enriching lives around the world with the most responsible ways of moving people
            <br>Through our commitment of quality, constant innovation and respect for people, we aim to exceed expectations and be rewarded with a smile...
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;font-size: x-large;">Mission</h5>
          <p class="card-text">Supplying the range of villas, events , gifts and so on to fullfill the requirements of the clients all over the world
            <br>Ensuring that our service are of outstanding, with everlasting quality, value for money and everlasting satisfaction for the clients
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- FOOETR SECTION -->


<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.instagram.com/the_dream_basil_paradise/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="me-4 link-secondary">
        <i class="fab fa-instagram" style="font-size: 36px;color: #F758FC;"></i>
      </a>
      <a href="https://wa.me/919840354831">
        <i class="fab fa-whatsapp-square" style="font-size: 36px;color: green;"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="end">
    <br>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <br>
            <i class="fas fa-gem me-3 text-secondary"></i>The Dream Basil Paradise
          </h6>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Resorts
          </h6>
          <p>
            <a href="ecr.php" class="text-reset">ECR</a>
          </p>
          <p>
            <a href="kodaikanal.php" class="text-reset">Kodaikanal</a>
          </p>
          <p>
            <a href="pondi.php" class="text-reset">Pondicherry</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          
          <p>
            <a href="munnar.php" class="text-reset">Munnar</a>
          </p>
          <p>
            <a href="varkala.php" class="text-reset">Varkala</a>
          </p>
          <p>
            <a href="wayanadu.php" class="text-reset">Wayanadu</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>R J College of arts ,scinec and commerce           opp ghatkhopar railway station,ghatkhopar(w),mumbai-86</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            thedreambasilparadise@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +91 98403 54831</p>
          <br >
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <br>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">TheDreamBasilParadise</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>


