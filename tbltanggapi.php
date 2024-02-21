<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https:fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<style>
		* {
			font-family: 'Roboto', sans-serif;
		}
		body{
			background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(light.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
		input {
			background-color: #F0E68C;
			color: #000;
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
		}

		table .mawar {
			background-color: #F0E68C;
			color: #000;
		}
		
	

	</style>
       <!-- Navigation-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                       
                        <li class="nav-item"><a class="nav-link" href="index.html">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
	<title>portal pengaduan masyarakat</title>
</head>
<body class="text-white">
	<h1 class="text-center mt-5" style="color: white;">PORTAL PENGADUAN MASYARAKAT</h1>
	<h1 class="text-center mt-4" style="color: white;">tabel tanggapan</h1>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
			<form class="form-inline mt-5 mx-auto">
				
			</form>
			<table class="table table-bordered bg-light mt-5">
				<thead class="mawar">
					<tr>
					<th scope="col">No</th>
						<th scope="col">id pengaduan</th>
						<th scope="col">tgl pengaduan</th>
						<th scope="col">NIK</th>
						<th scope="col">isi laporan</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
			</tbody>
			<form method="POST">
	<input type="text" name="textcari" placeholder="Cari "/>
	<input  type="submit"  name="cari" value="cari"/>
	  </form>
			<?php
    include 'koneksi.php';
    $input = mysqli_query($koneksi, "SELECT * from pengaduan");
	  if (isset($_POST['cari'])) {
		  $nama=$_POST["textcari"];
		  $input = mysqli_query($koneksi,  "SELECT * from pengaduan WHERE id_pengaduan LIKE '%$nama%' OR NIK LIKE '%$nama%' OR isi_laporan LIKE '%$nama%' OR tgl_pengaduan LIKE '%$nama%'" );
	  }else{
  $input=mysqli_query($koneksi, "SELECT * from pengaduan");
	  }
    $no = 1;
    foreach ($input as $row){
        echo "<tr>
        <td>$no</td>

        <td>" . $row['id_pengaduan'] . "</td>
        <td>" . $row['tgl_pengaduan'] . "</td>
        <td>" . $row['NIK'] . "</td>
        <td>" . $row['isi_laporan'] . "</td>
		<td>
		<a href='tanggapan.php?id_pengaduan=$row[id_pengaduan]'>
		<input type='button' value='tanggapi'></a>
        </td></tr>";
        $no++;
    }
    ?>  
			</div>
		</div>
	</div>
	
	<script scr="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-"></script>

</body>
</html>