<?php foreach ($users as $user): ?>
    <li><?php echo $user->name ?></li>
<?php endforeach; ?>

    <h1>Submit Your Name</h1>

    <form method="post" action="/users">
        <input type="text" name="name"/>
        <button>Submit</button>
    </form>