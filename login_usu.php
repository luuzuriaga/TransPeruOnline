<?php
session_start();
include("config.php");

$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if ($password == $row['password']) { 
        header("Location: home.html");
        exit();
    } else {
        header("Location: index.html?error=1");
        exit();
    }

} else {
    header("Location: index.html?error=1");
    exit();
}
?>