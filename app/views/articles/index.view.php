<?php require('app/views/partials/header.php'); ?>
<h1>All Articles</h1>
<ul>
    <?php if (!empty($articles)) {
        foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><a href="/article?id=<?= $article->id ?>"><?= $article->name ?></a></h2>
                    <p><?= $article->body ?></p>

                    <form method="post" action="\article\delete?id=<?= $article->id ?>">
                        <button type="submit">Delete</button>
                    </form>
                </article>

            </li>

        <?php endforeach;
    } ?>

</ul>
<?php require('app/views/partials/footer.php'); ?>