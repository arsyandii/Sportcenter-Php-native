<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	
<?php 
		include 'config/konek.php';

        $id = $_REQUEST['id'];
        $foto = $_REQUEST['foto'];
        

		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$foto = $_FILES['foto']['name'];
			$x = explode('.', $foto);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];	


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'foto/'.$foto);

					$query = "INSERT INTO tb_foto_profile (id, foto)VALUES('$id','$foto')";
                    $exe = mysqli_query($konek,$query);

					if ($exe){
                        header('location:upload.php');
                    }else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
                }
            }
        }
		?>
		

		<table>
			<?php 
			$data = mysql_query("SELECT * FROM tb_foto_profile");
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "foto/".$d['foto']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
</html>

