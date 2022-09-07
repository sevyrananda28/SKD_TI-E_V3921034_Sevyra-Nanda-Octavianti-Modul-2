<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKDModul2-Sevyra</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-dark">
                Tugas SKD Modul 2 - Sevyra Nanda Octavianti V3921034 TI E
            </div>
            <div class="card-body">
                <h1 style="text-align: center;">Encrypted & Decrypted</h1>
                <br>
                <div class="card">
                    <div class="card-header bg-info p-2 text-white">
                    </div>
                    <div class="card-body">
                        <form action="dekripsi.php" method="post">
                            <h2>Decrypted</h2>
                            <p>Created by Sevyra Nanda_V3921034_TI E</p>
                            <form action="enskripsi.php" method="post">
                                <input type="text" name="input" placeholder="input text">
                                <br>
                                <button type="submit" value="Enskripsi">Decrypted now!</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>