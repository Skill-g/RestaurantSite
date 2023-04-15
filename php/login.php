<?php

$host = '31.31.196.177';
$dbname = 'u1486089_rest';
$username = 'u1486089_rest';
$password = 'rP1jI4pL8cuK3oN1';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Failed to connect to database: " . $e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO bookings (name, phone, email, date, time, message) VALUES (:name, :phone, :email, :date, :time, :message)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':time', $time);
$stmt->bindParam(':message', $message);

$stmt->execute();

echo "###";


?>
