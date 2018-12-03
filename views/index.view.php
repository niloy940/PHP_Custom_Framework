<?php require('partials/head.php'); ?>

<h1>My Posts</h1>

<?php foreach ($posts as $post) : ?>
    <li>
        <?= $post->post_content; ?>
       
    </li>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
