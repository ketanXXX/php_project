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
<style>
 .navbar-nav {
  background-color:white;
}
  .container-fluid{
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
  </nav>

  <style>
    
    

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            
            flex: 1;
        }

        .booking-container {
            background-color: #fdffd0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

    
        .form-group {
            margin-bottom: 15px;
            min-height: 0;
        }

    
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        

        

        #totalPrice {
            margin-top: 10px;
            font-weight: bold;
        }

    /* Add any additional styling as needed */
</style>
</head>
<body>



<main>
<div class="booking-container">
    <form action="book.php" method="post">
    <div class="form-group">
            <label for="villaSelect">Select Villa:</label>
            <select id="villaSelect" required name="villaSelect">
                <option value="ECR">ECR</option>
                <option value="PONDICHERRY">PONDICHERRY</option>
                <option value="WAYANADU">WAYANADU</option>
                <option value="MUNNAR">MUNNAR</option>
                <option value="VARKALA">VARKALA</option>
                <!-- Add more options as needed -->
            </select>
    </div>

    <div class="form-group">
        <label for="vehicleType">Select Vehicle Type:</label>
        <select id="vehicleType" name="vehicleType" required name="vehicleType">
            <option value="none">None </option>
            <option value="twoWheeler">Two Wheeler (₹500 per day)</option>
            <option value="fourWheeler">Four Wheeler (₹900 per day)</option>
        </select>
    </div>
    <div>
        Note: Vehicle fees will be collected on the time of Check-in
    </div>

    <div class="form-group">
        <label for="checkInDate">Check-in Date:</label>
        <input type="date" id="checkInDate" required name="checkInDate">
    </div>

    <div class="form-group">
        <label for="checkOutDate">Check-out Date:</label>
        <input type="date" id="checkOutDate" required name="checkOutDate">
    </div>
    <div id="availability"></div>
    <script>
        $(document).ready(function() {
            $('#checkInDate, #checkOutDate').change(function() {
                var checkInDate = $('#checkInDate').val();
                var checkOutDate = $('#checkOutDate').val();
                $.ajax({
                    url: 'check_availability.php',
                    method: 'POST',
                    data: {
                        checkInDate: checkInDate,
                        checkOutDate: checkOutDate
                    },
                    success: function(response) {
                        $('#availability').html(response);
                    }
                });
            });
        });
    </script>

    <div class="form-group">
        <label for="adults">Number of Adults:</label>
        <input type="number" id="adults" min="1" max="3" value="1" required name="adults">
    </div>

    <div class="form-group">
        <label for="roomPrice">Room Price:</label>
        <input type="text" id="roomPrice" value="8000" readonly >
    </div>

    <div class="form-group">
      <button type="button" class="btn btn-primary" id="calculate" onclick="calculateTotal()" >Calculate Total</button>
    </div>

    <div class="form-group"> 

      
      <button  type="submit" class="btn btn-success" id="makePaymentBtn" name="submit" onclick="saveAndRedirect()" disabled>Make Payment</button>
      

    </div>

    <div id="totalPrice"></div>
    </form>
</div>
</main>

<!-- ... (your existing footer code) ... -->

<script>
  const baseRoomPrice = 8000;
  const additionalFeePerPerson = 0;
  var extraDayCharge = 8000;
  var totalPrice = 0;
  let selectedCheckInDate = null;
  let bookedDates = [];

  const selectedVilla = document.getElementById("villaSelect").value; // Replace "villa" with the actual ID of your select element

// Redirect to payment.html with the selected villa value as a query parameter
  

  function calculateTotal() {
      var checkInDate = document.getElementById("checkInDate").value;
      var checkOutDate = document.getElementById("checkOutDate").value;
      var selectedVilla = document.getElementById("villaSelect").value;
      var adults = document.getElementById("adults").value;

      // Check if both Check-in Date and Check-out Date are selected
      if (!checkInDate || !checkOutDate) {
          alert("Please select both Check-in Date and Check-out Date.");
          return;
      }

      // Check if the selected Check-in Date is today or in the past
      if (new Date(checkInDate) <= new Date(new Date().toISOString().split('T')[0])) {
          alert("Check-in Date must be in the future.");
          return;
      }

      // Check if the selected Check-out Date is greater than Check-in Date
      if (checkInDate >= checkOutDate) {
          alert("Check-out Date must be greater than Check-in Date.");
          return;
      }

      // Check if the selected dates are available
      if (!areDatesAvailable(checkInDate, checkOutDate)) {
          alert("The selected dates are not available. Please choose different dates.");
          return;
      }

      // Calculate the total price based on the selected values
      var totalPrice = baseRoomPrice + (Math.max(0, adults - 2) * additionalFeePerPerson);

      var checkInDateTime = new Date(checkInDate).getTime();
        var checkOutDateTime = new Date(checkOutDate).getTime();
        var timeDifference = checkOutDateTime - checkInDateTime;
        var hoursDifference = timeDifference / (1000 * 3600);

        if (hoursDifference > 23) {
            var extraDays = Math.ceil((hoursDifference - 23) / 24); // Calculate extra days
            totalPrice += extraDays * extraDayCharge - 8000;
        }

        document.getElementById("totalPrice").innerHTML = "Total Price for " + selectedVilla + ": " + totalPrice;

        // Disable selected Check-in Date
        selectedCheckInDate = checkInDate;
        disableDates();

        // Mark the selected dates as booked
        markDatesAsBooked(checkInDate, checkOutDate);

        // Enable the Make Payment button
        document.getElementById("makePaymentBtn").removeAttribute("disabled");

      document.getElementById("totalPrice").innerHTML = "Total Price for " + selectedVilla + ": " + totalPrice;

      // Disable selected Check-in Date
      selectedCheckInDate = checkInDate;
      disableDates();

      // Mark the selected dates as booked
      markDatesAsBooked(checkInDate, checkOutDate);

      // Enable the Make Payment button
      document.getElementById("makePaymentBtn").removeAttribute("disabled");
      
  }

 

  function validateAndMakeBooking() {
        // Validate other form fields as needed

        var selectedVehicleType = document.getElementById("vehicleType").value;

        // Calculate the price based on the selected vehicle type
        var pricePerDay = 0;
        if (selectedVehicleType === "twoWheeler") {
            pricePerDay = 500;
        } else if (selectedVehicleType === "fourWheeler") {
            pricePerDay = 900;
        }

        // Additional logic for making the booking on the server-side
        alert("Booking successful! Vehicle Type: " + selectedVehicleType );
    }

    function calculateTotalPrice(pricePerDay) {
        // Assume a booking duration of 1 day for simplicity
        return pricePerDay;
    }

  function disableDates() {
      var checkInDateInput = document.getElementById("checkInDate");
      var checkOutDateInput = document.getElementById("checkOutDate");

      // Enable all dates first
      checkInDateInput.removeAttribute("disabled");
      checkOutDateInput.removeAttribute("disabled");

      // Disable selected Check-in Date
      if (selectedCheckInDate !== null) {
          checkOutDateInput.setAttribute("min", selectedCheckInDate);
      }

      // Disable dates earlier than Check-in Date for Check-out Date
      if (checkInDateInput.value !== "") {
          checkOutDateInput.setAttribute("min", checkInDateInput.value);
      }

      // Disable booked dates
      for (const bookedDate of bookedDates) {
          document.getElementById(bookedDate).setAttribute("disabled", true);
      }
  }

  function areDatesAvailable(checkInDate, checkOutDate) {
      // Check if the selected dates are not in the bookedDates array
      for (let date = new Date(checkInDate); date <= new Date(checkOutDate); date.setDate(date.getDate() + 1)) {
          if (bookedDates.includes(date.toISOString().split('T')[0])) {
              return false; // Dates are not available
          }
      }
      return true; // Dates are available
  }

  function markDatesAsBooked(checkInDate, checkOutDate) {
      // Add the selected dates to the bookedDates array
      for (let date = new Date(checkInDate); date <= new Date(checkOutDate); date.setDate(date.getDate() + 1)) {
          bookedDates.push(date.toISOString().split('T')[0]);
      }
  }

  

   function saveAndRedirect() {
        // Save necessary data to sessionStorage
        var totalPrice = document.getElementById("totalPrice").innerText;
        sessionStorage.setItem("totalPrice", totalPrice);

        

        // Redirect to the payment page88
        
        window.location.href = "payment.php";
    }
</script>
<script>
document.getElementById("makePaymentBtn").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "book.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Redirect if the response is successful
            window.location.href = "user.php";
        }
    };
    xhr.send(); // Send the request without any data, assuming your PHP script does not need any additional data
});
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