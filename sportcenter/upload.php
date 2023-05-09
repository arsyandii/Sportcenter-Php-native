<!DOCTYPE html>
<?php
include "config/konek.php"
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous" />
    <title>DATABSE WEBSITE SANDI</title>
</head>
<body>
	
	<form action="uploadfile.php" method="post" enctype="multipart/form-data">
		<input type="file" name="foto">
		<input type="submit" name="upload" value="Upload">
	</form>
    <tr>
            <th scope="col">foto</th>
    </tr>

    <table>
            <?php
          $query="SELECT * FROM tb_foto_profile";
          $sql=mysqli_query($konek,$query);
          
          while($data=mysqli_fetch_array($sql)){
          ?>
			<tr>
				<td>
					<img src="foto/<?=$data['foto']?>" width="100px">
				</td>		
			</tr>
			<?php } ?>
		</table>
</body>
</html>