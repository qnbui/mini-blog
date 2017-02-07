<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>mini-blog</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2>blog<a href="">HELLOOOOO</a> </h2>

        </div>

        <div class="col-sm-12 text-center">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8 text-center">
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

        </div>
        <div class="col-sm-2">
        <a href="write.php" id="write">write a post</a>
        </div>

        </div>

    </body>
</html>
