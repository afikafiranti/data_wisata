<?php 
require 'function.php';

    // ambil data id wisata
    $id = $_GET["id_wisata"];
    
    $wisata = query("SELECT * FROM data_wisata WHERE id_wisata=$id")[0];

    if(isset($_POST["submit"])) {

        if ( ubah($_POST) > 0 ){
            echo "<script>
                    alert('Data berhasil diubah');
                    document.location.href = 'index.php'
                </script> ";
        } else {
            echo "<script>
                alert('Data gagal diubah');
                document.location.href = 'index.php'
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Wisata</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Update Data Wisata</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_wisata" value="<?= $wisata["id_wisata"]; ?>">
        <div class="finput">
            <table class="tb_ubah">
                <tr>
                    <td><label for="nama_wisata">Nama Wisata</label></td>
                    <td><input type="text" name="nama_wisata" id="nama_wisata" required value="<?= $wisata["nama_wisata"]; ?>"></td>
                </tr>

                <tr>
                    <td><label for="kategori_wisata">Kategori</label></td>
                    <td><input type="kategori_wisata" name="kategori_wisata" id="kategori_wisata" required value="<?= $wisata["kategori_wisata"]; ?>"></td>
                </tr>

                <tr>
                    <td><label for="nama_pengelola">Nama Pengelola</label></td>
                    <td> <input type="nama_pengelola" name="nama_pengelola" id="nama_pengelola" required value="<?= $wisata["nama_pengelola"]; ?>"></td>
                </tr>
                
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="email" id="email" value="<?= $wisata["email"]; ?>"></td>
                </tr>

                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td> <input type="alamat" name="alamat" id="alamat" value="<?= $wisata["alamat"]; ?>"></td>
                </tr>
                    
                <tr>
                    <td></td>
                    <td><button class="ubah" type="submit" name="submit">Update Data</button></td>
                </tr> 
            </table>
        </div>
    </form>
</body>
</html>