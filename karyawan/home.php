<?php 
    date_default_timezone_set("Asia/Jakarta");
    include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- dataTables CSS -->
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <title>SPK Penerimaan Karyawan</title>
  </head>
  <body>

	<!-- awal navbar -->
	     <!-- navbar menu -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=karyawan">Data Karyawan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=kriteria">Data Kriteria</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="?page=sub">Data Subkriteria</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="?page=input">Penilaian</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="?page=hasil">Hasil Seleksi</a>
            </li>
			<li class="nav-item">
            <a class="nav-link" href="index.php">Keluar</a>
            </li>
        </ul>
        </nav>
	<!-- akhir navbar -->
  
	<!-- awal container -->
    <div class="container" style="margin-top: 20px">
	
	<?php
		//setting variabel page & action
		$page = isset($_GET['page']) ? $_GET['page'] : "";
		$action = isset($_GET['action']) ? $_GET['action'] : "";
		
		//setting halaman
		if ($page==""){
			include "welcome.php";
		}elseif ($page=="karyawan"){
			if ($action==""){
				include "tampil_karyawan.php";
			}elseif ($action=="tambah"){
				include "tambah_karyawan.php";
			}elseif ($action=="update"){
				include "update_karyawan.php";
			}else{
				include "hapus_karyawan.php";
			}
		}elseif ($page=="kriteria"){
			if ($action==""){
				include "tampil_kriteria.php";
			}elseif ($action=="tambah"){
				include "tambah_kriteria.php";
			}elseif ($action=="update"){
				include "update_kriteria.php";
			}else{
				include "hapus_kriteria.php";
			}
		}elseif ($page=="sub"){
			if ($action==""){
				include "sub.php";
			}
		}elseif ($page=="input"){
			if ($action==""){
				include "tampil_input.php";
			}elseif ($action=="tambah"){
				include "tambah_input.php";
			}elseif ($action=="update"){
				include "update_input.php";
			}else{
				include "hapus_input.php";
			}
		}else{
			include "hasil.php";
		}
	?>
    </div>
	<!-- akhir container -->
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
	</script>
  </body>
</html>