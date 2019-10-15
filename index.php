<?php

include('functions.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php if (is_user_logged_in()): ?>
    <p>wel come</p>
<?php else: ?>
    <a href="login">login</a>
<?php endif; ?>
</body>
</html>