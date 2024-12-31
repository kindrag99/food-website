<?php
$host = 'localhost';
$db = 'user_management'; // Ganti dengan nama database Anda
$user = 'root';          // Default untuk XAMPP adalah 'root'
$password = '';          // Kosongkan jika Anda tidak mengatur password untuk root

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
