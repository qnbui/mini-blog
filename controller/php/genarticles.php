<?php

ini_set('display_errors', 1);
ini_set('dispaly_startup_errors', 1);

include 'PDO.php';

while ($r = mysqli_fetch_assoc($query)) {

$title = htmlentities($r['title']); //done to escape html chars
$des = htmlentities($r['description']);
echo "<div id='title' class='text-left'><h4><b>";
echo $title;
echo "</b></h4><hr style='border-top: 5px solid #fd6e05; width: 400px; margin-left: 0em;'></div>";
echo "<div id='des' class='text-left'><i><p>";

echo $des;

echo "</i></p></div>";
echo "<br/>
<br/>
";


}
?>
