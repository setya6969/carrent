<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$name=$_POST['name'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];

//menginput data ke database
mysqli_query($db,"insert into tbanggota values('$idanggota','$nama','$jk','$alamat','$status')");

//mengalihkan halaman kembali ke tampil_data.php
header("location:../index.php");
?>