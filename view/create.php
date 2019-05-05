<?php include VIEW.'header.php' ?>
<form action="?action=save" method="POST">


<div class="container">
<div class="row justify-content-md-center">
<div class="col col-lg-2">


<div class="form-group">
    <label>Title</label>
    <input type="text" name="title">
</div>
<div class="form-group">
    <label>Content</label>
    <textarea name="content"></textarea>
</div>
<button type="submit" name="enter">New Ad</button>

</div>
</div>
</div>

</form>
<?php include VIEW.'footer.php' ?>