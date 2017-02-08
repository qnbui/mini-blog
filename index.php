<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>mini-blog</title>
        <link rel="stylesheet" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
    </head>
    <body>
        <h2>blog<a href="">HELLOOOOO</a> </h2>

        <div class="row" id="div_modal">
             <?php
             include 'controller/php/PDO.php';
             $query = $dbh->query("SELECT Articles.id_articles , Articles.titre , Auteurs.pseudo FROM Articles,Auteurs LIMIT 0,5");
            $result = $query->fetchAll();
            foreach ($result as $row)
                            {?>
                                <div class="gen col-xs-11 col-xs-offset-1" id="<?= $row['id_articles'] ?>">
                                    <div class="titre"><b>Titre :</b> <?php echo $row["titre"]."<br>";?></div>
                                    <div class="pseudo"><b>Pseudo :</b> <?php echo $row["pseudo"]."<br>";?></div>
                                    <a class="appa_art" href="index.php?param_url=<?= $row['id_articles'] ?>" >
                                        <button type="button" class="btn btn-default col-xs-1" onclick="popup()">voir article</button>
                                        <?php echo "<br><br>"?>
                                    </a>
                                </div>

                            <?php }?>
        <div class="col-sm-3 col-sm-offset-9">
        <a href="view/template/creation.php" id="write">Ecrire un article</a>
        </div>

        </div>

    </body>
</html>
