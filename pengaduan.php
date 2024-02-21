
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Pengaduan Masyarakat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(light.jpg);
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        button {
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

        button:hover {
            background-color: #F0E68C;
        }
    </style>
</head>

<body>
    <h1>Portal Pengaduan Masyarakat</h1>
    <?php
        include 'koneksi.php';
        if (isset($_POST["ok"])){
           
            $tgl_pengaduan = $_POST["tgl_pengaduan"];
            $NIK = $_POST["NIK"];
            $nama = $_POST["nama"];
            $telp = $_POST["telp"];
            $isi_laporan = $_POST["isi_laporan"];
            $foto_pengaduan = $_FILES['foto']['name'];
            $temp_file = $_FILES['foto']['tmp_name'];
            $folder = "img/foto_pengaduan/".$foto_pengaduan;
        
            move_uploaded_file($temp_file, $folder);

           $input = mysqli_query($koneksi, "insert into pengaduan (tgl_pengaduan, NIK, isi_laporan, foto_laporan) values ( '$tgl_pengaduan','$NIK', '$isi_laporan', '$foto_pengaduan')");
           $input2 = mysqli_query($koneksi, "insert into masyarakat (NIK, nama, telp) values ( '$NIK','$nama', '$telp')");
           echo "<div class='alert alert-success'> PENGADUAN SUKSES</div>";
        }
        ?>
    <div class="form-container">
       
        <h2>Form Pengaduan Masyarakat</h2>
        <form action="" method="post" enctype="multipart/form-data">
      
            <label for="nik">NIK:</label>
            <input type="text" id="Nik" name="NIK" required>

            <label for="nama">NAMA:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telp">TELEPON:</label>
            <input type="text" id="telp" name="telp" required>

            <label for="tgl_pengaduan">Tanggal Pengaduan:</label>
            <input type="date" id="tgl_pengaduan" name="tgl_pengaduan" required>
<BR>
            <label for="isi_laporan">Isi Laporan:</label>
            <textarea id="isi_laporan" name="isi_laporan" rows="4" required></textarea>
              
              <input type="file" class="form-control" name="foto" style="height: 50px;">

           <center><button type="submit" name="ok">Submit</button></center>
           <BR>
           <center><a href="tblpengaduan.php" target="_blank"><button type="button">Lihat Pengaduan Lainnya</button></a></center> 
       
    </div>   
    </form>
</body>

</html>