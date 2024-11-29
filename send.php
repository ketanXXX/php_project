<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\resort-main\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\resort-main\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\resort-main\phpmailer\src\SMTP.php';

function sendEmailFromDatabase($subject, $body) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;
        $mail->Username = 'your_smtp_username'; // SMTP username
        $mail->Password = 'your_smtp_password'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // For SSL encryption
        $mail->Port = 465; // SSL port number
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Debugoutput = function($str, $level) { echo "debug level $level; message: $str"; };

        //Recipients
        $mail->setFrom('ganeshprasad114@gmail.com', 'TheDreamBasilParadise');

        // Fetch email addresses from database
        $conn = new mysqli("localhost", "username", "", "bookingdetails");
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT email FROM ultimate";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mail->addAddress($row['email']); // Add a recipient
            }
        }

        $conn->close();

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
$subject = 'Booking Confirmation';
$body = 'Your booking has been confirmed.';
sendEmailFromDatabase($subject, $body);
?>
