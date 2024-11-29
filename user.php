<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webpage</title>
  <link rel="stylesheet" href="global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  
  
</head>
<body>
  <div class="container">
    <div class="form-section">
      <h1>Book Now</h1>
      <form action="connect.php" method="post">
        <div class="form-field">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" required name="firstname">
        </div>

        <div class="form-field">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" required name="lastname">
        </div>
        
        <div class="form-field">
          <label for="email">Email Address</label>
          <input type="email" id="email" required name="email">
        </div>
        <div class="form-field">
          <label for="country">Country</label>
          
          <select id="country" required name="country">
            <option value="">Select Country</option>
            <option value="india">India</option>
            <!-- Add more country options here -->
          </select>
        </div>
        
        <div class="form-field">
          <label for="phone">Phone Number</label>
          <div class="col-sm-10">
          <input type="tel" id="phone" required name="phone">
          </div>
        </div>
        <div class="form-field">
          <label for="special-requests">Special Requests</label>
          <textarea id="special-requests"></textarea>
        </div>
        <div class="form-field">
          <input type="checkbox" id="policy" required>
          <label for="policy">By completing this booking I acknowledge I have read and accepted the<a href="propertypolicies.php"> Property Policies</a></label>
        </div>
        
        <input type="submit" class="btn btn-primary">
      </form>
    </div>

    <style>
      main {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}

button {
            background-color: #2196F3;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #4f98ec;
        }

.container {
    background-color: #fdffd0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
}


.form-field {
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

button {
    background-color: #2196F3;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #4f98ec;
}

body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('kabin.jpg'); /* Replace 'your-image.jpg' with the path to your image */
      background-size: cover;
      background-position: center;
      overflow: hidden;
    }

    .blur-container {
      position: absolute;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(1000px); /* Adjust the blur intensity as needed */
    }

    .content {
      z-index: 1;
      text-align: center;
      color: white;
    }
    </style>

  </html>
   