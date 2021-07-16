<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Data BMI Pasien</title>
</head>
<style>
		body {
			min-height: 2000px;
            background: url('data.jpg');
            
		}
        .container{
             color:black;
             font-family: arial;
	         width:400px;
             border:2px solid #777;
	         height:600px;
	         padding:20px;
	         background-color: #87CEFA;
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
    <!-- header -->
<header class='header'>
        <h3 class='head'>Input Data BMI Pasien</h3>
</header>
    <!-- content -->

<?php
    $abc1 = ['id'=>1, 'nama'=>'Ihsanullah', 'um'=>'30', 'bd'=>'65', 'td'=>'160', 'jk'=>'Laki-Laki'];
    $abc2 = ['id'=>2, 'nama'=>'Hamzah Izzaturrahman', 'um'=>'28', 'bd'=>'50', 'td'=>'170', 'jk'=>'Laki-Laki'];
    $abc3 = ['id'=>3, 'nama'=>'Muhammad Iqbal', 'um'=>'26', 'bd'=>'50', 'td'=>'165', 'jk'=>'Laki-Laki'];
    $abc4 = ['id'=>4, 'nama'=>'Dzulfiqar Ghoziyarrahman', 'um'=>'24', 'bd'=>'47', 'td'=>'160', 'jk'=>'Laki-Laki'];
    $abc5 = ['id'=>5, 'nama'=>'Alya Shafwa Wafiya', 'um'=>'20', 'bd'=>'44', 'td'=>'160', 'jk'=>'Perempuan'];

    $abc6 = ['id'=>6, 'nama'=>$_POST['nama'], 'um'=>$_POST['um'], 'bd'=>$_POST['bd'], 'td'=>$_POST['td'], 'jk'=>$_POST['jk']];
    $abc_data = [$abc1, $abc2, $abc3, $abc4, $abc5];
?>

<table border="1" width="100%" class='table'>
    <thead>
        <tr>
            <th>No</th><th>Nama</th><th>Umur</th><th>Berat Badan</th><th>Tinggi Badan</th><th>Jenis Kelamin</th>
        </tr>
    </thead>
<tbody>
    <?php
        $nomor = 1;
        foreach($abc_data as $dt){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$dt['nama'].'</td>';
            echo '<td>'.$dt['um'].'</td>';
            echo '<td>'.$dt['bd'].'</td>';
            echo '<td>'.$dt['td'].'</td>';
            echo '<td>'.$dt['jk'].'</td>';
            $nomor++;
        }
    ?>
</tbody>
</body>
</html>