<?php require 'partials/head.view.php'; ?>

<h1>Submit Your Name</h1>

<form method="post" action="/names">
    <input type="text" name="name"/>
    <button>Submit</button>
</form>

<?php require('partials/footer.view.php'); ?>