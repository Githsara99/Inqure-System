<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "sign_updb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $restaurant = mysqli_real_escape_string($conn, $_POST['restaurant']);
    $date = mysqli_real_escape_string($conn, $_POST['Date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert the form data into the database
    $sql = "INSERT INTO your_table_name (Title, Firstname, Lastname, Email, Phone, Country, Restaurant, Date, Time, Message)
            VALUES ('$title', '$firstname', '$lastname', '$email', '$phone', '$country', '$restaurant', '$date', '$time', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Form submitted successfully!";
        header("Location: success_page.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: error_page.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: dining.html");
    exit();
}
?>
