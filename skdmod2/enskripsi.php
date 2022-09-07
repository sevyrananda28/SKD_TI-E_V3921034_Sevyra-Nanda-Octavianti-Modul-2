<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypted</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="card-container">
            <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    enkripsi();
}
function enkripsi(){
    $input = $_POST["input"];

    $key = array(
        'a' => '~', 'i' => '$', 'u' => '^', 'e' => '#', 'o' => '+',
        
        'A' => '!', 'I' => '%', 'U' => '_', 'E' => '=', 'O' => '*',

        '1' => 'b', '2' => 'c', '3' => 'd', '4' => 'f', '5' => 'g',

        '6' => 'h', '7' => 'j', '8' => 'k', '9' => 'l', '10' => 'm',
    );
    
    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "Kata yang di enkripsi adalah ", $input;

    echo "<br><br>";
    echo "Hasil enkripsi adalah ", $enkripsi;
};

?>

        </div>
    </div>
    <a class="nav-link" href="inputdekrip.php"><button type="button" class="btn btn-warning">Decrypted now!</button></a>
</body>

</html>