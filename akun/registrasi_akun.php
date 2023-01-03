<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idAkun = $_POST['id_akun'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO akun (id_akun,name,email,password) VALUES ('$idAkun','$name','$email','$password')";
}

require_once '../koneksi.php';

if (mysqli_query($con, $sql)) {
    echo "berhasil menambahkan akun";
}else{
    echo "gagal menambahkan akun";
}
mysqli_close($con)
?>