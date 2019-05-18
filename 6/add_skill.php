<?php
include('config.php');
if(isset($_POST['submit'])) {
$user_id = $_POST['user_id'];
$skill = $_POST['skill'];

$sql ="INSERT INTO skill(skill,user_id) VALUES('$skill','$user_id')";
$query = mysqli_query($con, $sql);

header('Location: index.php');
}