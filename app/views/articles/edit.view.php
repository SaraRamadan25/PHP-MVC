<?php if(! empty($article)){?>
    <?php require('app/views/partials/header.php'); ?>
    <h1>Edit Article</h1>
    <form action="/article/update" method="POST">
        <input type="hidden" name="id" value="<?= $article->id ?>
        <div>
         <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name" id="title" value="<?= $article->name ?>">
        </div>

        <div>
            <label for="body">Body</label>
            <input type="text" name="body" placeholder="Body" id="body" value="<?= $article->body ?>">
        </div>
        <button type="submit">Submit</button>
        <button type="submit">Delete</button>
    </form>
    <?php require('App/views/partials/footer.php'); ?>
<?php }else{
    echo "No article found";
} ?>