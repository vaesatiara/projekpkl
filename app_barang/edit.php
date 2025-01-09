<?php
include "koneksi.php";
$no =$_GET['no'];
$sql = "SELECT * FROM barang WHERE no= '$no' ";
$query = mysqli_query($koneksi, $sql);

while($barang=mysqli_fetch_assoc($query)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><center>Edit</center></h1>
        <form action="proses_edit.php" method="get">
            <input type="hidden" name="no" value="<?= $barang['no']?>"><br><br>

            <label for="">Nama</label>
            <input type="text" name="nama" id=""  value="<?= $barang['nama']?>"><br><br>

            <label for="">Harga</label>
            <input type="number" name="harga" id=""  value="<?= $barang['harga']?>"><br><br>

            <label for="">Stok</label>
            <input type="number" name="stok" id=""  value="<?= $barang['stok']?>"><br><br>

            <input type="submit" value="Ubah">
        </form>
    </body>
    </html>
    <?php
}?>