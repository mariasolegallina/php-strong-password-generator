<?php
// $psw_length = $_GET['psw_length'];

$psw_length = isset($_GET['psw_length']) ? $_GET['psw_length'] : '';
var_dump('numero', $psw_length);

// function generateRandomPassword($length) {

// }

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


</body>
</html>