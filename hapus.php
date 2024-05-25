<?php
include_once 'koneksi.php';
$nim = $_GET['nim'];

$sql = "DELETE FROM rayiden WHERE nim = '{$nim}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');