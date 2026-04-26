<?php
$conn = mysqli_connect("localhost", "root", "", "TransPeruOnline");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>