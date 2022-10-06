<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center><table border="1">
        <tr>
            <td colspan="3">Ini adalah form isi data produk</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><?= $_GET["produk"];  ?></td>
        <tr>
            <td>Jumlah Produk</td>
            <td>:</td>
            <td><?= $_GET["jumlah"];  ?></td>
        </tr>
        <tr>
            <td>Jenis Produk</td>
            <td>:</td>
            <td><?= $_GET["jenis"];  ?></td>
        </tr>
        <tr>
            <form action="iam2.php" method="get">
            <td colspan="3"><center><button>KIRIM</button></center></td>
            </form>
        </tr>
    </table></center>
</body>
</html>