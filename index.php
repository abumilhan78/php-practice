<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method = "POST">
        Input Your Name : <input type="text" name="nama">
        <br>
        <input type="submit" value="submit">

    </form>
</body>
</html>

<?php

if (isset($_POST['submit']))
{
   $nama = $_POST['nama'];
   echo "Nama Anda Adalah : ";
   echo $_POST['nama'];
}

?>
