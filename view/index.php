<?php include VIEW.'header.php' ?>
<?php
foreach($all as $val){
?>

<div class="container">
<div class="row justify-content-md-center">
<div class="col col-lg-8">

<h1><?= $val['title'] ?></h1>
<p><?= $val['content'] ?></p>
<p><a href="<?= URL.'?action=edit&id='.$val['id'] ?>">[EDIT]</a></p>
<form action="?action=delete&id=<?=$val['id'] ?>" method="POST">
<button type="submit" name="enter">Delete</button>
</form>
</div>
</div>
</div>
<?php
}
?>



<?php include VIEW.'footer.php' ?>