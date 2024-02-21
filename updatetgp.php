<?php
include 'koneksi.php';
if(isset($_POST["ok"])){
  $id_tanggapan = $_POST["id_tanggapan"];
 
  $tgl_tanggapan = $_POST["tgl_tanggapan"];
  $tanggapan = $_POST["tanggapan"];

  $insert = mysqli_query($koneksi, "UPDATE tanggapan SET tanggapan= '$tanggapan' WHERE id_tanggapan=$id_tanggapan");

    if($insert) {
        echo '<script>alert("Berhasil edit tanggapan"); window.location.href = "tbltanggapan.php";</script>';
    }else{
        echo '<script>alert("gagal edit tanggapan");</script>';
    }
}
?>

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
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(neon.jpg);
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
    <h1>FORM TANGGAPAN PENGADUAN</h1>
    <div class="form-container">
    <?php 
          include 'koneksi.php';
          $id_tanggapan = $_GET['id_tanggapan'];
          $update = mysqli_query($koneksi, "SELECT * FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");
          foreach ($update as $row) {

          }

          ?>
         
            <br>
        <form action="" method="POST">
		<label for="id_tanggapan">ID Tanggapan:</label>
            <input type="number" id="id_tanggapan" name="id_tanggapan" value="<?php echo $row['id_tanggapan'];?>" readonly>
        <label for="id_pengaduan">ID Pengaduan:</label>
            <input type="number" id="id_pengaduan" name="id_pengaduan" value="<?php echo $row['id_pengaduan']; ?>" readonly>

            <label for="tgl_tanggapan">Tanggal Tanggapan:</label>
            <input type="date" id="tgl_tanggapan" name="tgl_tanggapan" value="<?php echo $row['tgl_tanggapan']; ?>" >

            <label for="tanggapan">Tanggapan:</label>
            <textarea id="tanggapan" name="tanggapan" rows="5" cols="100" ><?= $row['tanggapan']; ?></textarea>
<br>

           <center><button type="submit" name="ok">Update</button></center>
           <BR>
           <center><a href="tbltanggapan.php" target="_blank"><button type="button">Lihat Tanggapan Lainnya</button></a></center> 
		  
		</form>
    </div>   
</body>
</html>




