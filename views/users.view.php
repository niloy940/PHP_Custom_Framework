
<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

    <h1>Add Users :</h1>

    <form method="post" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
