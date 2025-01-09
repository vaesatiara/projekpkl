 <?php
 include "koneksi.php";
 $sql="SELECT * FROM barang";
 $query=mysqli_query($koneksi,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1><center>DATA BARANG</center></h1>
    <a href="tambah.php"><button>Tambah</button></a>
    <table border ="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Aksi</td>
        </tr>
        <?php while ($barang=mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $barang['no']?></td>
                <td><?= $barang['nama']?></td>
                <td><?= $barang['harga']?></td>
                <td><?= $barang['stok']?></td>
                <td>
                    <a href="edit.php?no=<?= $barang['no']?>"> Edit</a>
                    <a href="hapus.php?no=<?= $barang['no']?>"> Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
 </body>
 </html>