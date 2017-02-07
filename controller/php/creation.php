<?php
include 'PDO.php';

if (isset($_POST['title']) && isset($_POST['description'])) {

	if (!empty($_POST['title']) && !empty($_POST['description'])) {
$nick = $_POST['nick'];
$title = $_POST['title'];
$description  = $_POST['description'];
//making a database connection

$sql = "INSERT INTO title`, `contenu`, 'pseudo' VALUES ('$title', '$description', '$nick')";

//send a query to database to store the data

$query = mysqli_query($dbh,$sql);

	}
}
