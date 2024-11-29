<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property Policies</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #222;
        color: #fff;
    }

    .container {
        max-width: 800px;
        padding: 30px;
        background: linear-gradient(to bottom right, #536dfe, #00b0ff);
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        text-align: center;
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #fff;
    }

    h2 {
        font-size: 1.5em;
        color: #f06292;
        margin-top: 30px;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
    }

    li {
        font-size: 1.1em;
        margin-bottom: 10px;
    }

    a {
        color: #f06292;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .icon {
        font-size: 2em;
        margin-right: 10px;
    }

    @media (max-width: 600px) {
        .container {
            padding: 20px;
        }
    }
</style>
</head>
<body>
<div class="container">
    <h1>Property Policies</h1>
    <div class="policy-section">
        <h2><i class="fas fa-clock icon"></i>Check-in/Check-out Times</h2>
        <p>Check-in: 3:00 PM</p>
        <p>Check-out: 11:00 AM</p>
    </div>
    <div class="policy-section">
        <h2><i class="fas fa-calendar-alt icon"></i>Cancellation Policy</h2>
        <p>Cancel up to 24 hours before check-in and get a full refund, minus the service fee.</p>
    </div>
    <div class="policy-section">
        <h2><i class="fas fa-exclamation-triangle icon"></i>Additional Policies</h2>
        <ul>
            <li>No smoking allowed in rooms</li>
            <li>No pets allowed</li>
            <!-- Add more policies here -->
        </ul>
    </div>
</div>
</body>
</html>
