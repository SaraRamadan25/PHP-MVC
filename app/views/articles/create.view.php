<?php require ('app\views\partials\header.php'); ?>
<h2>
    create article
</h2>
<form method="post" action="/articles/store">
    <div>
        <input type="text" name="name" placeholder="name">
    </div>
    <div>
        <input type="text" name="body" placeholder="body">
    </div>
<button type="submit" >Create</button>
</form>

