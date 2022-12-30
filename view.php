<?php 
$koneksi = mysqli_connect('localhost','root','','ucapan');

 ?>

 <?php 
// session_start();
// $_SESSION['nama'];
// echo $_SESSION['nama'];

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartu Ucapan | Selamat Tahun Baru.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<!--     <div class="alert alert-warning" role="alert">
        
    </div> -->
 
    <div class="container">
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Nama</th>
        			<th>pesan</th>
        		</tr>
        	</thead>
        	<?php 
        		$no=1;
        		$sql = mysqli_query($koneksi, "SELECT * from tbucapan");
        		while ($d = mysqli_fetch_array($sql)) {
        	 ?>
        	<tbody>
        		<tr>
        			<td><?php echo $no++; ?></td>
        			<td><?php echo $d['nama']; ?></td>
        			<td><?php echo $d['pesan']; ?></td>
        		</tr>
        	</tbody>
        <?php }?>
        </table>
        
    </div>














    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>