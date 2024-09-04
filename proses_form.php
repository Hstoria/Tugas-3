<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontak_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO kontak (name, nim, email, hobby, sex, phone)
    VALUES ('$name', '$nim', '$email', '$hobby', '$sex', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>