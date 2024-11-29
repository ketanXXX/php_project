<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>ECR Resorts</title>
</head>
<style>
  .container-fluid{
  background-color:white;
}
.navbar-nav {
  background-color:white;
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
          </li>
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
          
        
            
        </ul>
      </div>
    </div>
  </nav>

  
    <section class="caption">
        <h1>Escape to Coastal Bliss: Your Dream Resort on ECR Awaits!</h1>
    </section>
    <section class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./ecr/ecr-1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-3.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-4.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-5.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-6.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-7.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-8.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-9.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./ecr/ecr-10.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="bb">
        <a class="btn btn-primary btn-lg" href="booking.php" role="button">Book Now</a>
    </section>
    <div>
      <div> 
        <h3 class="s-description"><span stranslate="room.PROPERTIES"><span class="strans">Properties</span></span>:</h3>

         <!----><div class=""><ul class="features">
         <!----><li class="accomodates" ng-if="room.maxPersons" ng-show="$state.current.alias != 'rooms'">

                    
                    <span stranslate="room.ACCOMMODATES"><span class="strans">Accommodates</span></span>:
                    <span ng-bind="room.maxPersons">3</span>
                 </li><!---->

           <li class="size" ng-show="room.hasSize() &amp;&amp; (settings.showSize || $state.current.alias != 'rooms')">
            <i class="disc"></i>
            <span stranslate="room.SIZE"><span class="strans">Size</span></span>:
           <abbr>
           432
            <span stranslate-title="room.SIZE_LONG_UNITS_FT2" stranslate="room.SIZE_UNITS_FT2" title="Square Feet"><span class="strans">sq ft</span></span>
            </abbr>
               </li>
            <li class="beds" ng-show="room.hasBeds() &amp;&amp; (settings.showBeds || $state.current.alias != 'rooms')" )="">
           <i class="disc"></i>
           <span stranslate="room.BEDS"><span class="strans">Bedroom</span></span>:
           <!----><span class="bed" ng-repeat="bed in room.beds">
          <span stranslate="room.BED_TYPE_QUEEN" stranslate-values="{COUNT: bed.count}"><span class="strans">2 King(s) size beds</span></span>
            </span><!---->
           </li>
           </ul></div>
    </div><!---->

    <!----><div class="content-block s-separator description s-description" ng-if="translations.room[room.roomId].desc || room.longDesc">
      <h3 class="s-description"><span stranslate="room.MORE_INFO"><span class="strans">More Info</span></span>:</h3>
      <p stranslate="Away from the city chaos, closer to the wilderness - this 432 sq.ft tiny kabin represents minimalism like no other. Tastefully designed to give you the best of comfort &amp; luxury, this kabin makes you feel one with nature right from the moment you step your foot in. It comes with an outdoor swing overlooking the Pawna valley. A private jacuzzi to soak in the mesmerising views. 

Alongside free breakfast, our in-house menu lets you enjoy a wide range of delicacies. We take special requests for a cake, and a romantic candle light dinner to help you create the best memories with your loved one. 

Driver’s accommodation shall be covered with no additional cost. Surrounded by some of the best amenities, we believe your stay here to be nothing short of perfect."><span class="strans">Away from the city chaos, closer to the wilderness - this 432 sq.ft tiny kabin represents minimalism like no other. Tastefully designed to give you the best of comfort &amp; luxury, this kabin makes you feel one with nature right from the moment you step your foot in. It comes with an outdoor swing overlooking the Pawna valley. A private jacuzzi to soak in the mesmerising views. 

Alongside free breakfast, our in-house menu lets you enjoy a wide range of delicacies. We take special requests for a cake, and a romantic candle light dinner to help you create the best memories with your loved one. 

Driver’s accommodation shall be covered with no additional cost. Surrounded by some of the best amenities, we believe your stay here to be nothing short of perfect.</span></p>
    </div><!---->

    

    <!---->
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
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
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
          <p><i class="fas fa-home me-3 text-secondary"></i>#7, Muthuvel street, Kodambakkam, Chennai -600024</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            thedreambasilparadise@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +91 98403 54831</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
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