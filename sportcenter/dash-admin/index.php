<!DOCTYPE html>
<?php 
 include "../config/konek.php";
 $sql = "SELECT * FROM tb_customer";
 session_start();
if ($_SESSION['status'] !="login") {
 echo "<script>alert('LOGIN TERLEBIH DAHULU');document.location.href='../index.php'</script>";
}
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
          <a class="navbar-brand">selamat datang <?=$_SESSION['username']?></a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">SEARCH</button>
            <a href="detail.php" class="btn btn-outline-danger" type="submit">TAMBAH BARANG</a>
            <a href="../logout.php" class="btn btn-outline-danger" type="submit">LOG OUT</a>
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
            <th scope="col">foto</th>
            
            <th scope="col">edit</th>
            <th scope="col">delete</th>
            <th scope="col">show more</th>
          </tr>

          <a href = "olah.php" class="d-grid gap-2 d-md-block mb-3">
          <button class="btn btn-primary" type="button">tambah data</button>
        </div>

        <a href = "profile.php" class="d-grid gap-2 d-md-block mb-3">
          <button class="btn btn-primary" type="button">tambah profile</button>
        </div>

        </thead>
          <tbody class="table-group-divider">
          <?php
          $query="SELECT * FROM tb_customer";
          $sql=mysqli_query($konek,$query);
          $no=1;
          while($data=mysqli_fetch_array($sql)){
          ?>
          
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            
            
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['nomor_hp'];?></td> 
            <td><?php echo $data['foto'];?></td> 
            
            <td>
            <a href="olah.php?edit=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"}/>
          </svg>
        </td>
      </a>
        <td>
          <a href="../controller/proses.php?hapus=<?php echo $data['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
      </svg>
    </td>
  </a> 
  <td>
  <a href="detail.php?h=<?php echo $data['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-segmented-nav" viewBox="0 0 16 16">
  <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm6 3h4V5H6v4zm9-1V6a1 1 0 0 0-1-1h-3v4h3a1 1 0 0 0 1-1z"/>
</svg>
    </td>
  </a> 
  </td>
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
