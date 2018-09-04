<?php

require 'connection.php';

$result = $conn->query('SELECT * FROM users');

$users = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td>
            <a href="/crud/ver.php?id=<?php echo $user['id']; ?>">ver</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

    <p><a href="/crud/adicionar.php">adicionar</a></p>

</body>
</html>

<?php var_dump($users); ?>