<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>mini-blog</title>
        <link rel="stylesheet" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                    <!-- <a class="appa_art" href="index.php?param_url=<?= $row['id_articles'] ?>" > -->
                                        <button type="button" class="btn btn-default col-xs-1" id="myBtn">voir article</button>
                                        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

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
