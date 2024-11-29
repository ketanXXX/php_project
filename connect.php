<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn = new mysqli('localhost','root','','bookingdetails');
    if ($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection Failed :'.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("insert into ultimate(firstname,lastname,email,phone) values(?,?,?,?)");
        $stmt->bind_param("sssi", $firstname, $lastname, $email, $phone);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: payment.php');
		$stmt->close();
		$conn->close();
    }
?>