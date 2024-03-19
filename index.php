<?php

// funzione per generare password
function psw_generator($len)
{
    $password = '';

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $chars_len = strlen($chars) - 1;

    for ($i = 0; $i < $len; $i++) {
        $password .= $chars[rand(0, $chars_len)];
    }
    return $password;
};

// recupero la lunghezza della password richiesta
$psw_length = $_GET['psw-length'] ?? false;
$psw_length = intval($psw_length);
// var_dump($psw_length);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong pasword generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-2 py-4">
        <div class="d-flex justify-content-center row">
            <div class="text-bg-light p-3 col-6 p-5 border border-light-subtle rounded-2">
                <form action="" method="GET">
                    <h3 class="fs-6 mb-3">Imposta la lunghezza della tua password</h3>
                    <input required type="number" min="8" max="24" name="psw-length">
                    <input type="submit" value="Genera">
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-center row mt-5">
            <div class="text-bg-light p-3 col-6 p-5 border border-light-subtle rounded-2">
                <div class="result">
                    <h3 class="fs-6 mb-3">La tua password sicurissima di <?php echo $psw_length; ?> caratteri è:</h3>
                    <p><?php echo psw_generator($psw_length) ?></p>
                </div>
            </div>
        </div>
    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>