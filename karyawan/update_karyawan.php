<!-- awal proses update -->
<?php 

if(isset($_POST['update'])){
    
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

    // proses update
    $sql = "UPDATE karyawan SET nama_karyawan='$nama_karyawan',alamat='$alamat',nohp='$nohp',pengalaman_kerja='$pengalaman_kerja',
	nilai_tes='$nilai_tes',jenjang_pendidikan='$jenjang_pendidikan',status='$status',umur='$umur' WHERE id_karyawan='$id_karyawan'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=karyawan");
    }
}

//menggambil id dari variabel
$id_karyawan=$_GET['id_karyawan'];

//menampilkan data karyawan
$sql = "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- akhir proses update -->

<h1 align="center">UPDATE DATA KARYAWAN</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            
			<div class="form-group">
            <label for="id_karyawan">ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id_karyawan']; ?>" name="id_karyawan" readonly>
            </div>
			
			<div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" class="form-control" value="<?php echo $row['nama_karyawan']; ?>" name="nama_karyawan" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="nohp">No Hp</label>
            <input type="text" class="form-control" value="<?php echo $row['nohp']; ?>" name="nohp" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja</label>
            <input type="text" class="form-control" value="<?php echo $row['pengalaman_kerja']; ?>" name="pengalaman_kerja" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="nilai_tes">Nilai Tes</label>
            <input type="text" class="form-control" value="<?php echo $row['nilai_tes']; ?>" name="nilai_tes" maxlength="10" required>
            </div>
			
			<div class="form-group">
            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
            <input type="text" class="form-control" value="<?php echo $row['jenjang_pendidikan']; ?>" name="jenjang_pendidikan" maxlength="13" required>
            </div>
			
			<div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" value="<?php echo $row['status']; ?>" name="status" maxlength="15" required>
            </div>
			
			<div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" value="<?php echo $row['umur']; ?>" name="umur" maxlength="13" required>
            </div>
			
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=karyawan">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>