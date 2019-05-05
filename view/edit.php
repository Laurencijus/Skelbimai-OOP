<?php include VIEW.'header.php' ?>
<form action="?action=update&id=<?=$AD['id'] ?>" method="POST">
<input type="text" name="title" value="<?= $AD['title'] ?>">
<textarea name="content"><?=$AD['content'] ?></textarea>
<button type="submit" name="enter">New Ad</button>
</form>
<?php include VIEW.'footer.php' ?>