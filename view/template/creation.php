
<div class="text-center">

Blog simple<a href="">hello</a>

</div>

<div class="col-sm-12 text-left">

<h4>title</h4>
<form action="write.php" method="POST">
<input type="text" name="title" class="form-control" placeholder="entrer un titre">

<br/>
<br/>
<h4>description</h4>
<textarea name="description" class="form-control" style="height: 270px;" placeholder="entrer un contenu">

</textarea>
<br/>
<br/>
<div class="text-center">
<input type="submit" name="submit" class="btn btn-primary" value="post">
</form>
</div>
</div>

<?php include'../controller/php/creation/creation.php';>
