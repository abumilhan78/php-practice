<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <label>Nama : </label>
        <input type="text" name="nama">
        <br>
        <input type="button" value="submit">

    </form>
</body>
</html>

<?php

if (isset($_POST['nama']))
{
   echo "Nama Anda Adalah : ";
   echo $_post['nama'];
}

?>