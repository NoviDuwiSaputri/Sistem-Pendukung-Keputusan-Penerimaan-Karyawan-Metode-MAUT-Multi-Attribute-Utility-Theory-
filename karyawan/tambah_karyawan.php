<!-- awal proses tambah data -->
<?php

if(isset($_POST['simpan'])){
	
	//mengambil data dari form
    $id_karyawan=$_POST['id_karyawan'];
	$nama_karyawan=$_POST['nama_karyawan'];
	$alamat=$_POST['alamat'];
	$nohp=$_POST['nohp'];
	$pengalaman_kerja=$_POST['pengalaman_kerja'];
	$nilai_tes=$_POST['nilai_tes'];
	$jenjang_pendidikan=$_POST['jenjang_pendidikan'];
	$status=$_POST['status'];
	$umur=$_POST['umur'];
	
    // validasi
    $sql = "SELECT*FROM karyawan WHERE id_karyawan='$id_karyawan'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ID sudah digunakan</strong>
            </div>
        <?php
    }else{
		//proses simpan
        $sql = "INSERT INTO karyawan VALUES ('$id_karyawan','$nama_karyawan','$alamat','$nohp','$pengalaman_kerja','$nilai_tes',
		'$jenjang_pendidikan','$status','$umur')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=karyawan");
        }
    }
}
?>
<!-- akhir proses tambah data -->

<h1 align="center">INPUT DATA KARYAWAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
		
            <div class="form-group">
            <label for="id_karyawan">ID</label>
            <input type="text" class="form-control" name="id_karyawan" maxlength="5" required>
            </div>
			
			<div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" class="form-control" name="nama_karyawan" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="nohp">No Hp</label>
            <input type="text" class="form-control" name="nohp" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja</label>
            <input type="text" class="form-control" name="pengalaman_kerja" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="nilai_tes">Nilai Tes</label>
            <input type="text" class="form-control" name="nilai_tes" maxlength="10" required>
            </div>
			
			<div class="form-group">
            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
            <input type="text" class="form-control" name="jenjang_pendidikan" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" maxlength="15" required>
            </div>
			
			<div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" name="umur" maxlength="13" required>
            </div>
			
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=karyawan">Batal</a>
        </div>
    </div>
</form>