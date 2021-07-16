<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Pendaftaran BMI Pasien</title>
</head>
<style>
        body {
			min-height: 2000px;
            background: url('medis.jpg');
            
		}
        .container{
             color:black;
             font-family: arial;
	         width:400px;
             border:2px solid #777;
	         height:340px;
	         padding:20px;
	         background-color: #FFA07A;
			 line-height: 25px;
	         position: fixed;
	         top: 30%;
	         left: 50%;
	         margin-top: -120px;
	         margin-left: -220px;
             border-radius: 5px;
}
    </style>
<body>
<h3>Formulir Data BMI Pasien</h3>
<hr>
    <form method="POST" action="data_bmipasien.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="um"></td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td><input type="text" name="bd"></td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td><input type="text" name="td" ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-Laki" id="">Laki-Laki
                <input type="radio" name="jk" value="Perempuan" id="">Perempuan</td>
            </tr>
        </table>
        <br>
        <button type="submit" value="submit">Save</button>
    </from>
<?php
  $nama = $_POST ['nama'];
  $um = $_POST ['um'];
  $bd = $_POST['bd'];
  $tb = $_POST['td'];
  $jk = $_POST['jk'];
?>
</body>
</html>