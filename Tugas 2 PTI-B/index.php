<?php
ob_start();
$list_nim = [
	"156150600111001",
	"156150600111002",
	"156150600111003",
	"156150600111004",
	"156150600111007",
	"156150600111008",
	"156150600111009",
	"156150600111011",
	"156150600111012",
	"156150600111018",
	"156150600111019",
	"156150600111020",
	"156150600111021",
	"156150600111022",
	"156150600111027",
	"156150601111001",
	"156150601111003",
	"156150601111017",
	"156150601111018",
	"156150601111020",
	"156150601111021",
	"156150601111023",
	"156150601111024",
	"156150601111025",
	"156150601111026",
	"156150601111027",
	"156150607111001",
	"156150607111002",
	"156150607111003",
	"156150607111004",
	"156150607111005",
	"156150607111013",
	"156150607111015",
	"156150607111017"
];

$deadline = '2016-03-15 23:20:00';

//$tglawal = date('Y-m-d', strtotime($deadline));
$tglakhir = date('Y-m-d', strtotime($deadline));
//$jamawal = date('H:i:s', strtotime($deadline));
$jamakhir = date('H:i:s', strtotime($deadline));

$tglskrg = date('Y-m-d');
$jamsekarang = date("H:i:s");
$tglskrg = date('Y-m-d', strtotime($tglskrg));
$jamsekarang = date("H:i:s", strtotime($jamsekarang));

$kirim = false;

if ($tglskrg <= $tglakhir) {
	if ($jamsekarang <= $jamakhir) {
		$kirim = true;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pengumpulan Tugas Sistem Digital</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link href="../assets/bootstrap-3.3.5-dist/css/santosa.css" rel="stylesheet">
	<link href="../assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body>
  	<div class="container">
  		<section class="row" id="content">
  			<div class="col-md-12 col-sm-12 col-xs-12">
  				<div class="cards-panel">
  					<div class="cards-body ">
  						<div id="head-content">
  							<div class="alert alert-success text-center"><h3><strong>Selamat Datang di Aplikasi Pengumpulan Tugas 2</strong></h3></div>

  						</div>
  						<div id="content-ketentuan">
  							<h4>Ketentuan Mengupload : </h4>
  							<ol>
  								<li>File yang diupload harus berektensi / berjenis .ms11</li>
  								<li>Jawaban soal nomor 1 dan nomor 2 harus terpisah</li>
  								<li>Jawaban dapat diupload dua kali atau lebih namun yang digunakan adalah jawaban yang terakhir</li>
  								<li>Batas Pengumpulan Jawaban adalah <strong>hari Selasa, 15 Maret 2016 jam 22.00 WIB</strong></li>
  							</ol>
  							<hr>
  						</div>
  						<div id="content-upload">
  						<?php
  							if($kirim){
  								?>
  								<div id="info">
  									<?php 

  									if(isset($_GET['status']) && $_GET['message']){
  										echo '<div class="alert alert-'.$_GET['status'].'"><strong>'.$_GET['message'].'</strong></div>';
  									}

  									?>
		  						</div>
	  							<form class="form-horizontal" enctype="multipart/form-data" method="POST" id="form-tugas" action="">
	  								<div class="form-group">
	  									<label class="col-sm-4 control-label">NIM</label>
	  									<div class="col-sm-4">
	  										<select class="form-control" name="nim" id="nim">
	  											<option value="-">Pilih NIM Anda</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<option>08823828</option>
	  											<?php
	  											/*
	  												foreach ($list_nim as $nim) {
	  													echo "<option>$nim</option>";
	  												}*/
	  											?>
	  										</select>
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label class="col-sm-4 control-label">Jawaban nomor 1</label>
	  									<div class="col-sm-4">
	  										<input type="file" name="nomor_1" id="nomor_1" required="true">
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label class="col-sm-4 control-label">Jawaban nomor 2</label>
	  									<div class="col-sm-4">
	  										<input type="file" name="nomor_2" id="nomor_2" required="true">
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<div class="col-sm-offset-4 col-sm-4">
	  										<input type="button" class="btn btn-success btn-kirim" name="kirim" id="kirim" value="Kirim Tugas">
	  									</div>
	  								</div>
	  							</form>
  								<?php
  							} else {
  								?>
  								<div class="alert alert-danger text-center">
  									<strong>Anda Sudah Melewati Batas Pengumpulan</strong>
  								</div>
  								<?php
  							}
  							?>
  						</div>
  						<hr>
  						<p style="text-align: right;"> imamsantosa.id | <?php echo date('Y'); ?></p>
  					</div>
  				</div>
  			</div>
  		</section>
  	</div>
  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="../assets/Jquery 2.1.4/jquery-2.1.4.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  	<script src="../assets/script.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$('.btn-kirim').on('click', function(){
  				var nim = $('#nim').val();
  				var no_1 = document.getElementById("nomor_1").files.length;
  				var no_2 = document.getElementById("nomor_2").files.length;
  				if (nim != '-' && no_1 != 0 && no_2 != 0) {
	  				if (confirm('Apakah NIM dan Jawaban yang anda masukan sudah benar???')) {
	  					document.getElementById("form-tugas").submit();
	  				}
  				} else {
  					alert('Anda Belum Memilih NIM atau Belum Memilih Jawaban');
  				}
  			})
  		});
  	</script>
  </body>
  </html>

  <?php

	if (isset($_POST['nim'])){
	    $nama_folder = "jawaban/";
	    $name1 = $_FILES['nomor_1']['name'];
	    $size1 = $_FILES['nomor_1']['size'];
	    $type1 = $_FILES['nomor_1']['type'];
	    $info1 = pathinfo($name1);
	    $ext1 = $info1['extension'];

	    $name2 = $_FILES['nomor_2']['name'];
	    $size2 = $_FILES['nomor_2']['size'];
	    $type2 = $_FILES['nomor_2']['type'];
	    $info2 = pathinfo($name2);
	    $ext2 = $info2['extension'];

	    if(($ext1 == "ms11" || $ext1 == "MS11") && ($ext2 == "ms11" || $ext2 == "MS11")) {
		    if (!empty($_FILES['nomor_1']['tmp_name']) && !empty($_FILES['nomor_2']['tmp_name'])) {
		    	$nama_nomor1 = $_POST['nim'].'_nomor_1_'.date('Y-M-d H:i:s').'.ms11';
		    	$nama_nomor2 = $_POST['nim'].'_nomor_2_'.date('Y-M-d H:i:s').'.ms11';
		    	try{
		            move_uploaded_file($_FILES['nomor_1']['tmp_name'], $nama_folder.$nama_nomor1);
		            move_uploaded_file($_FILES['nomor_2']['tmp_name'], $nama_folder.$nama_nomor2);
		            header('location:?status=success&message=Berhasil Mengirim Jawaban Tugas 2');
		    	}catch(Exception $e){

		    	}
		    } else {
		    	header('location:?status=danger&message=Gagal Mengupload Jawaban Tugas 2');
		    }
		}else{
	    	header('location:?status=danger&message=Tipe file yang dikirim tidak sesuai dengan ketentuan');
	    }

	}

  ?>