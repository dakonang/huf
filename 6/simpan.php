<?php
include('config.php');
if(isset($_POST['submit'])) {
$nama = $_POST['name'];

$sql ="INSERT INTO users(name) VALUES('$nama')";
$query = mysqli_query($con, $sql);
//echo $nama;
header('Location: index.php');
}