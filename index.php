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
                          $query = $dbh->query("SELECT Articles.id_article , Articles.Titre , auteurs.pseudo , Articles.date_creation FROM Articles, Auteurs  $searchAuteurId $searchCatId  ORDER BY date_creation $searchDate LIMIT 0,5 ");
                          $result = $query->fetchAll();
                          foreach ($result as $row)
                            {?>
                                <div class="gen col-xs-11 col-xs-offset-1" id="<?= $row['id_article'] ?>">
                                    <div class="titre"><b>Titre :</b> <?php echo $row["Titre"]."<br>";?></div>
                                    <div class="pseudo"><b>Auteur :</b> <?php echo $row["pseudo"]."<br>";?></div>
                                    <div class="date_creation"><b>Date de création :</b> <?php echo $row["date_creation"]."<br><br>";?></div>
                                    <a class="appa_art" href="index.php?param_url=<?= $row['id_article'] ?>" >
                                        <button type="button" class="btn btn-default col-xs-1" onclick="popup()">voir article</button>
                                        <?php echo "<br><br>"?>
                                    </a>
                                </div>

                            <?php }?>
        <div class="col-sm-2">
        <a href="view/template/creation.php" id="write">Ecrire un article</a>
        </div>

        </div>

    </body>
</html>
