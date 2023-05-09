<?php
include '../config/konek.php';
if(isset($_POST['btnProses'])){
    $id =$_POST['id'];
    $nama =$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $nomor_hp=$_POST['nomor_hp'];
    $id_barang=$_POST['id_barang'];
    $id_pembayaran=$_POST['id_pembayaran'];
   
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO `tb_customer` (`id`, `nama`, `alamat`, `email`, `nomor_hp`, `id_barang`, `id_pembayaran`) VALUES (, '', '', '', '', '', '')";
        $sql=mysqli_query($konek,$query);
        if ($sql){
            header('location:index.php');
        }
    } else {
        echo "edit data";
    }
}elseif($_GET['hapus']){
    $query="DELETE FROM tb_customer WHERE id='$_GET[hapus]'";
    $sql=mysqli_query($konek, $query);
    
    if ($sql){
        header('location:index.php');
    }
}

?> INSERT INTO `tb_customer` (`id`, `nama`, `alamat`, `email`, `nomor_hp`, `id_barang`, `id_pembayaran`) VALUES (, '', '', '', '', '', '')";