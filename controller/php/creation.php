<?php
include 'PDO.php';

	if(isset($_POST["submit"])){

		try {

			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql =  "INSERT INTO Articles(`titre`, `contenu`)
			VALUES ('".$_POST["title"]."','".$_POST["description"]."');
			INSERT INTO Auteurs(`pseudo`)
			VALUES ('".$_POST["nick"]."');
			INSERT INTO Categories(`themes`)
			VALUES ('".$_POST["theme"]."');"
			;
		if ($dbh->query($sql)) {
			echo "<script type= 'text/javascrispt'>alert('New Record Inserted Successfully');</script>";
			}
		else{
			echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
			}

			$dbh = null;
			}
			catch(PDOException $e)
			{
			echo $e->getMessage();
			}
header('Location: ../../index.php');
		}
