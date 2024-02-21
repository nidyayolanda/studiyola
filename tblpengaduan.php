<!doctype html>
	<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integri>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		<style>
			* {
				font-family: 'Roboto', sans-serif;
			}

			body {
                background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(neon.jpg);
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
			}

    input {
       
            background-color: #66CDAA;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 10px; /* Added margin to separate buttons */
        }
       

		</style>
        
		<title>ISI LAPORAN PENGADUAN</title>
	</head>
	<body class="text-white">
		<h1 class="text-center mt-5">PORTAL PENGADUAN MASYAKARAT</h1>
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-9">
	    <table class="table bg-light">
	<thead class="thead-dark">
		<tr>
		<th scope="col">No.</th>
        <th scope="col">ID Pengaduan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">NIK</th>
       
        <th class="text-center" scope="col"> Isi Laporan Pengaduan</th>
        <th scope="col">Foto</th>
    </tr>
    </thead>
    <form method="POST">
  <input type="text" name="textcari" placeholder="Cari "/>
  <input type="submit"  name="cari" value="cari"/>
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
        <td><img src='img/foto_pengaduan/" . $row['foto_laporan'] . "' alt='Foto Pengaduan' style='max-width: 100px; max-height: 100px;'></td>

        </td></tr>";
        $no++;
    }
    ?>  
</table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN"></script>
</body>
</html>