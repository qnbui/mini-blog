<?php
include 'PDO.php';

if (isset($_POST['title']) && isset($_POST['description'])) {

	if (!empty($_POST['title']) && !empty($_POST['description'])) {

$title = $_POST['title'];
$description  = $_POST['description'];
//making a database connection

$sql = "INSERT INTO `blog`(`title`, `description`) VALUES ('$title', '$description')";

//send a query to database to store the data

$query = mysqli_query($db_con, $sql);

	}
}
