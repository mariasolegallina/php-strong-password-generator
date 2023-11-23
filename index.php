<?php
// $psw_length = $_GET['psw_length'];

$psw_length = isset($_GET['psw_length']) ? $_GET['psw_length'] : '';
var_dump('numero', $psw_length);

function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $randomString;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    
<form action="" method="GET">
    <label for="psw_length">Lunghezza:</label>
    <input type="number" name="psw_length">
    <button type="submit">Genera la password</button>
</form>
<div>La password è: <?php echo generateRandomPassword($psw_length)?></div>

</body>
</html>