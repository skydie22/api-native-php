<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idAkun = $_POST['id_akun'];
 
    
    $sql = "DELETE FROM akun WHERE id_akun = '$idAkun'";
}

require_once '../koneksi.php';

if (mysqli_query($con, $sql)) {
    echo "berhasil menghapus akun";
}else{
    echo "gagal menghapu akun";
}
mysqli_close($con)
?>