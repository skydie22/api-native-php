<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idAkun = $_POST['id_akun'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "UPDATE akun SET name = '$name', email = '$email', password = '$password' WHERE id_akun = '$idAkun'";
     
}

require_once '../koneksi.php';

if (mysqli_query($con, $sql)) {
    echo "berhasil mengedit akun";
}else{
    echo "gagal mengedit akun";
}
mysqli_close($con)
?>