<?php 

require 'function.php';

    //cek apa button submit sudah ditekan atau tidak
    if(isset($_POST["submit"])) {


        // cek apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php'
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <title>Tambah Data Wisata</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Tambah Data Wisata</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="finput">
            <table cellpadding="2px" cellspacing="0">
                <tr>
                    <td><label for="nama_wisata">Nama Wisata</label></td>
                    <td><input type="text" name="nama_wisata" id="nama_wisata" required></td>
                </tr>

                <tr>
                    <td><label for="kategori_wisata">Kategori Wisata</label></td>
                    <td><input type="text" name="kategori_wisata" id="kategori_wisata" required></td>
                </tr>

                <tr>
                    <td><label for="nama_pengelola">Nama Pengelola</label></td>
                    <td><input type="ftext" name="nama_pengelola" id="nama_pengelola"></td>
                </tr>

                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>

                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="ubah" type="submit" name="submit">Tambah Data</button></td>
                </tr>

            </table>
        </div>
    </form>
</body>
</html>