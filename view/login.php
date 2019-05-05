<?php include VIEW.'header.php' ?>
<form action="?action=login" method="POST">


<div class="container">
<div class="row justify-content-md-center">
<div class="col col-lg-2">


<div class="form-group">
    <label>Name</label>
    <input type="text" name="name">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="pass">
</div>

<button type="submit" name="enter">Login</button>

</div>
</div>
</div>

</form>
<?php include VIEW.'footer.php' ?>