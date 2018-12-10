<?php require('partials/head.php'); ?>


<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

    <h1>Submit Your Name :</h1>

    <form method="post" action="/names">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
