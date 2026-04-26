<?php
include "config.php";

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (nombres, apellidos, dni, celular, usuario, password)
VALUES ('$nombres','$apellidos','$dni','$celular','$usuario','$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        window.location.href='index.html';
    </script>";
} else {
    echo "<script>
        window.location.href='register.html';
    </script>";
}
?>