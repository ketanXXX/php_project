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
</head>
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
                
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                </ul>
              </li>
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
          </li>
          
        </ul>
      </div>
    </div>
    <div class="popup" id="successPopup">
    <h3>Payment Successful</h3>
    <p>Your payment has been processed successfully.</p>
</div>
<div class="overlay" id="overlay"></div>

  </nav>
  </body>
  <style>
    .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 0;
}

  .container-fluid{
  background-color:white;
}
.navbar-nav {
  background-color:white;
}
</style>


  <style>
    main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }



        .payment-container {
            background-color: #fdffd0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }

    .form-group {
            margin-bottom: 15px;
        }
</style>
</head>
<body>

  <div class="payment-container">
    <h2>Payment Details</h2>
    <form id="paymentForm">
        <div class="form-group">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" placeholder="Enter card number" maxlength="16" required>
        </div>
        <div class="form-group">
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" placeholder="MM/YY" maxlength="5" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="password" id="cvv" placeholder="Enter CVV" maxlength="3" required>
        </div>
        <div class="form-group">
            <label for="cardHolderName">Card Holder Name:</label>
            <input type="text" id="cardHolderName" placeholder="Enter card holder name" required>
        </div>

        <!-- Display the totalPrice received from booking. -->
        <p id="totalPrice"></p>

        <a href="s.php" id="makePaymentLink" onclick="validateAndMakePayment()" disabled>
    <button id="makePaymentBtn">Make Payment</button>
    </form>
  </div>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Add event listener for overlay click
    document.getElementById("overlay").addEventListener("click", function() {
        document.getElementById("successPopup").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    });
});

function validateAndMakePayment() {
    var cardNumberInput = document.getElementById("cardNumber");
    var cardNumber = cardNumberInput.value.replace(/\s/g, ''); 

    if (isValidCreditCardNumber(cardNumber)) {
        alert("Your booking has been confirmed. Thank you for choosing us.");
        window.location.href = "s.php"; 

        // Show success popup
        document.getElementById("successPopup").style.display = "block";
        document.getElementById("overlay").style.display = "block";
        
    } else {
        document.getElementById("cardNumberError").innerText = "Invalid credit card number. Please enter a valid 16-digit number.";
    }
}

// Function to check if the credit card number is valid (for testing purposes)
function isValidCreditCardNumber(cardNumber) {
    return /^\d{16}$/.test(cardNumber);
}


    function sendEmailFromDatabase(subject, body) {
       
        alert("Email sent: " + subject + " - " + body);
    }
  </script>
</body>

  
  
  

    
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