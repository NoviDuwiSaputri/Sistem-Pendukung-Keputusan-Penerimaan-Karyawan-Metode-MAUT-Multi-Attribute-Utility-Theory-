<!-- awal proses update -->
<?php 

if(isset($_POST['update'])){
    
	//mengambil data dari form
    $id_kriteria=$_POST['id'];
	$kode=$_POST['kode'];
	$nama_kriteria=$_POST['nama_kriteria'];
	$atribut=$_POST['atribut'];
	$bobot=$_POST['bobot'];	

    // proses update
    $sql = "UPDATE kriteria SET nama_kriteria='$nama_kriteria',atribut='$atribut',bobot='$bobot' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=kriteria");
    }
}

//menggambil id dari variabel
$id=$_GET['id'];

//menampilkan data kriteria
$sql = "SELECT * FROM kriteria WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- akhir proses update -->

<h1 align="center">UPDATE DATA KRITERIA</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            
			<div class="form-group">
            <label for="id">ID Kriteria</label>
            <input type="text" class="form-control" value="<?php echo $row['id']; ?>" name="id" readonly>
            </div>
			
			<div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" value="<?php echo $row['kode']; ?>" name="kode" readonly>
            </div>
			
			<div class="form-group">
            <label for="nama_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" value="<?php echo $row['nama_kriteria']; ?>" name="nama_kriteria" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="atribut">Atribut</label>
            <input type="text" class="form-control" value="<?php echo $row['atribut']; ?>" name="atribut" maxlength="10" required>
            </div>
			
			<div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="text" class="form-control" value="<?php echo $row['bobot']; ?>" name="bobot" maxlength="5" required>
            </div>
			
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=kriteria">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>