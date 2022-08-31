<?php 

require 'function.php';

$id = $_GET["id_wisata"];

if( hapus($id) > 0 ){
    echo "
            <script>
                alert('Data sukses dihapus!');
                document.location.href = 'index.php'
            </script>
        ";
} else {
    echo "
            <script>
                alert('Maaf, Data gagal dihapus!');
                document.location.href = 'index.php'
            </script>
        ";
}

?>