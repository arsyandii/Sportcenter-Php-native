<?php
$konek=mysqli_connect("localhost","root","");
$db=mysqli_select_db($konek,"db_sportcenter");
if($konek){
    echo "koneksi telah berhasil";
}
?>
