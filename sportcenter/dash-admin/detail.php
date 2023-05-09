<!DOCTYPE html>
<?php 
 include "../config/konek.php";
 $sql = "SELECT nama, alamat, email, nomor_hp, merek, harga, kategori, kondisi, emoney, mbanking FROM tb_customer  INNER JOIN tb_barang  ON c.id_barang = b.id INNER JOIN tb_pembayaran  ON c.id_pembayaran = p.id;";
?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous" />
    <title>DATABSE WEBSITE SANDI</title>
  </head>
  <body>
  <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">
      <nav class="navbar bg-light mt-2">
        <div class="container-fluid">
          <a class="navbar-brand">DATABASE SANDI RPL</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">SEARCH</button>
            <a href="index.php" class="btn btn-outline-danger" type="submit">===KEMBALI===</a>
          </form>
        </div>
      </nav>

      <figure class="text-center">
        <blockquote class="blockquote mt-2 mb-2">
          <p>DATABASE</p>
        </blockquote>
        <figcaption class="blockquote-footer">TAMBAH DATABASE CUSTOMER<cite title="Source Title">SESUAI DENGAN TABLE</cite></figcaption>
      </figure>

      <table class="table table-bordered border-primary table-danger table-striped table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">email</th>
            <th scope="col">nomor_hp</th>
            <th scope="col">merek</th>
            <th scope="col">harga</th>
            <th scope="col">kategori</th>
            <th scope="col">kondisi</th>
            <th scope="col">emoney</th>
            <th scope="col">mbanking</th>
            <th scope="col">id Transaksi</th>
            <th scope="col">lihat customer</th>
            <!-- <th scope="col">edit</th> 
            <th scope="col">delete</th>
            <th scope="col">show more</th>
          </tr>
        </div> -->

        </thead>
          <tbody class="table-group-divider">
          <?php
          $query="SELECT nama, alamat, email, nomor_hp, merek, harga, kategori, kondisi, emoney, mbanking, id_transaksi FROM tb_customer c INNER JOIN tb_barang b ON c.id_barang = b.id INNER JOIN tb_pembayaran p ON c.id_pembayaran = p.id;";
          $sql=mysqli_query($konek,$query);
          $no=1;
          ($data=mysqli_fetch_array($sql));{
          ?>
          
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['nomor_hp'];?></td> 
            <td><?php echo $data['merek'];?></td>
            <td><?php echo $data['harga'];?></td>
            <td><?php echo $data['kategori'];?></td>
            <td><?php echo $data['kondisi'];?></td> 
            <td><?php echo $data['emoney'];?></td>
            <td><?php echo $data['mbanking'];?></td>
            <td><?php echo $data['id_transaksi'];?></td>
            <td>
            <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
        </td>
      </a>
    
          </tr>
          <?php
          $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
