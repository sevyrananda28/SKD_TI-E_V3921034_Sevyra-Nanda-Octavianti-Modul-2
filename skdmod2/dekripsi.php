<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrypted</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="card-container">
            <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    dekripsi();
}
function dekripsi(){
    $input = $_POST["input"];

    $key = array(
        '~' => 'a', '$' => 'i', '^' => 'u', '#' => 'e', '+' => 'o',
        
        '!' => 'A', '%' => 'I', '_' => 'u', '=' => 'E', '*' => 'O',

        'b' => '1', 'c' => '2', 'd' => '3', 'f' => '4', 'g' => '5',

        'h' => '6', 'j' => '7', 'k' => '8', 'l' => '9', 'm' => '10',
    );
    
    $dekripsi = str_ireplace(array_keys($key), $key, $input);

    echo "Kata yang di dekripsi adalah ", $input;

    echo "<br><br>";
    echo "Hasil dekripsi adalah ", $dekripsi;
};
?>

        </div>
    </div>
    <a class="nav-link" href="index.php"><button type="button" class="btn btn-warning">Back</button></a>
</body>

</html>