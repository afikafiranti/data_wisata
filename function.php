<?php 

    $conn = mysqli_connect("localhost", "root", "", "pariwisata");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;
        
        // ambil data dari tiap elemen di dalam form
        $nama_wisata = ($data["nama_wisata"]); 
        $kategori_wisata = ($data["kategori_wisata"]);
        $nama_pengelola = ($data["nama_pengelola"]);
        $email = ($data["email"]);
        $alamat = ($data["alamat"]);

        // query insert data
        $query = "INSERT INTO data_wisata VALUES
                    ('','$nama_wisata','$kategori_wisata', '$nama_pengelola', '$email','$alamat')
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM data_wisata WHERE id_wisata=$id");

        return mysqli_affected_rows($conn);
    }


    function ubah($data) {
        global $conn;
        
        $id = $data["id_wisata"];
        $nama_wisata = ($data["nama_wisata"]); 
        $kategori_wisata = ($data["kategori_wisata"]);
        $nama_pengelola = ($data["nama_pengelola"]);
        $email = ($data["email"]);
        $alamat = ($data["alamat"]);
        

        // query insert data
        $query = "UPDATE data_wisata SET 
                    nama_wisata = '$nama_wisata',
                    kategori_wisata = '$kategori_wisata',
                    nama_pengelola = '$nama_pengelola',
                    email = '$email',
                    alamat = '$alamat'
                WHERE id_wisata = $id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


?>

