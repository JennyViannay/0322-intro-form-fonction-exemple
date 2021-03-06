<?php 

require 'functions.php';

$error = "";

// si server est requis en method post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //alors, je verifies si email + password ne sont pas vides
    login();
}   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= !empty($error) ? $error : '' ; ?>
    <form method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>