<?php
session_start();
if (isset($_GET['index'])) {
  $i = $_GET['index'];
  unset($_SESSION['carrito'][$i]);
  $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}
header('Location: carrito.php');
exit;
