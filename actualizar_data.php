<?php
session_start();

$_SESSION['All-data'][$_POST['id']]['nombre'] = $_POST['nombre'];
$_SESSION['All-data'][$_POST['id']]['apellido'] = $_POST['apellido'];
$_SESSION['All-data'][$_POST['id']]['carrera'] = $_POST['carrera'];
$_SESSION['All-data'][$_POST['id']]['status'] = isset($_POST['status'])?"activo":"inactivo";
header('location:index.php');