<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $appointment_date = htmlspecialchars($_POST["appointment_date"]);

    $to = "contact@clinic.com";  // Replace with the clinic's email
    $subject = "New Appointment Request";
    $message = "Name: $name\nEmail: $email\nAppointment Date: $appointment_date";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Appointment request sent successfully!";
    } else {
        echo "Error sending appointment request. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>