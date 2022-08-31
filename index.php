<?php 
    require 'function.php';
    $wisata = query("SELECT * FROM data_wisata ORDER BY id_wisata DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wisata Palopo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Data Wisata Kota Palopo</h1>

    <div class="tindex">
        <a href="tambah.php" class="insert">Tambah Data Wisata</a><br><br>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Wisata</th>
                    <th>Kategori</th>
                    <th>Nama Pengelola</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Ket</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach( $wisata as $isi ) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $isi["nama_wisata"] ?></td>
                        <td><?= $isi["kategori_wisata"] ?></td>
                        <td><?= $isi["nama_pengelola"] ?></td>
                        <td><?= $isi["email"] ?></td>
                        <td><?= $isi["alamat"] ?></td>

                        <td>
                            <a class="ubah" href="ubah.php?id_wisata=<?= $isi["id_wisata"];?>">Edit</a> | 
                            <a class="hapus" href="hapus.php?id_wisata=<?= $isi["id_wisata"]; ?>" onclick="return confirm('yakin?') ">Hapus</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
    </div>

</body>
</html>