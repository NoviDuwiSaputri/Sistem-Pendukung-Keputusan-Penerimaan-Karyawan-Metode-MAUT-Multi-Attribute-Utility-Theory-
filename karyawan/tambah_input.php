<!-- awal proses tambah data -->
<?php

if(isset($_POST['simpan'])){
	
	//mengambil data dari form
    $id_input=$_POST['id_input'];
	$nama_karyawan=$_POST['nama_karyawan'];
	$pengalaman_kerja=$_POST['pengalaman_kerja'];
	$nilai_tes=$_POST['nilai_tes'];
	$jenjang_pendidikan=$_POST['jenjang_pendidikan'];
	$status=$_POST['status'];
	$umur=$_POST['umur'];
	
    // validasi
    $sql = "SELECT*FROM input_nilai WHERE id_input='$id_input'";
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
        $sql = "INSERT INTO input_nilai VALUES ('$id_input','$nama_karyawan','$pengalaman_kerja','$nilai_tes','$jenjang_pendidikan','$status','$umur')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=input");
        }
    }
}

?>
<!-- akhir proses tambah data -->

<h1 align="center">INPUT NILAI BOBOT</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
		
            <div class="form-group">
            <label for="id_input">ID</label>
            <input type="text" class="form-control" name="id_input" maxlength="5" required>
            </div>
			
			<div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" class="form-control" name="nama_karyawan" maxlength="50" required>
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
            <a class="btn btn-danger" href="?page=input">Batal</a>
        </div>
    </div>
</form>