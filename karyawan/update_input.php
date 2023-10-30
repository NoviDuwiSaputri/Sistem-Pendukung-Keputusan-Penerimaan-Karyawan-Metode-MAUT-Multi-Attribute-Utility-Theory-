<!-- awal proses update -->
<?php 

if(isset($_POST['update'])){
    
	//mengambil data dari form
    $id_input=$_POST['id_input'];
	$nama_karyawan=$_POST['nama_karyawan'];
	$pengalaman_kerja=$_POST['pengalaman_kerja'];
	$nilai_tes=$_POST['nilai_tes'];
	$jenjang_pendidikan=$_POST['jenjang_pendidikan'];
	$status=$_POST['status'];
	$umur=$_POST['umur'];

    // proses update
    $sql = "UPDATE input_nilai SET nama_karyawan='$nama_karyawan',pengalaman_kerja='$pengalaman_kerja',nilai_tes='$nilai_tes',
	jenjang_pendidikan='$jenjang_pendidikan',status='$status',umur='$umur' WHERE id_input='$id_input'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=input");
    }
}

//menggambil id dari variabel
$id_input=$_GET['id_input'];

//menampilkan data input
$sql = "SELECT * FROM input_nilai WHERE id_input='$id_input'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- akhir proses update -->

<h1 align="center">UPDATE NILAI BOBOT</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            
			<div class="form-group">
            <label for="id_input">ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id_input']; ?>" name="id_input" readonly>
            </div>
			
			<div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" class="form-control" value="<?php echo $row['nama_karyawan']; ?>" name="nama_karyawan" readonly>
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