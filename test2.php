<?php
$villaSelect = $_POST["villaSelect"];
$vehicleType = $_POST["vehicleType"];
$checkInDate = $_POST["checkInDate"];
$checkOutDate = $_POST["checkOutDate"];
$adults = $_POST["adults"];

$conn = new mysqli("localhost", "root", "", "bookingdetails");
if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
}
else{
    // Check room availability
    $stmt = $conn->prepare("SELECT COUNT(*) AS num_bookings FROM details WHERE villaSelect = ? AND checkInDate < ? AND checkOutDate > ?");
    $stmt->bind_param("sss", $villaSelect, $checkOutDate, $checkInDate);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $availableRooms = $row['num_bookings'];

    if ($availableRooms > 0) {
        echo "The selected room is not available for the selected dates.";
        exit(); // Stop further execution
    }

    // Insert booking details
    $stmt = $conn->prepare("INSERT INTO details (villaSelect, vehicleType, checkInDate, checkOutDate, adults) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die('Error: ' . $conn->error); // Output any SQL error
    }
    $stmt->bind_param("ssssi", $villaSelect, $vehicleType, $checkInDate, $checkOutDate, $adults);
    $execval = $stmt->execute();
    if($execval) {
        header("Location:user.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
