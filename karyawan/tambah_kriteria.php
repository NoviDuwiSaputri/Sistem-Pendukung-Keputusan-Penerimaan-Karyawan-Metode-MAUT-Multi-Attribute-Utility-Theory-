<!-- awal proses tambah data -->
<?php

if(isset($_POST['simpan'])){
	
	//mengambil data dari form
    $id=$_POST['id'];
	$kode=$_POST['kode'];
	$nama_kriteria=$_POST['nama_kriteria'];
	$atribut=$_POST['atribut'];
	$bobot=$_POST['bobot'];	
	
    // validasi
    $sql = "SELECT*FROM kriteria WHERE id='$id'";
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
        $sql = "INSERT INTO kriteria VALUES ('$id','$kode','$nama_kriteria','$atribut','$bobot')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=kriteria");
        }
    }
}
?>
<!-- akhir proses tambah data -->

<h1 align="center">INPUT DATA KRITERIA</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
		
            <div class="form-group">
            <label for="id">ID Kriteria</label>
            <input type="text" class="form-control" name="id" maxlength="5" required>
            </div>
			
			<div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" name="kode" maxlength="5" required>
            </div>
			
			<div class="form-group">
            <label for="nama_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" name="nama_kriteria" maxlength="50" required>
            </div>
			
			<div class="form-group">
            <label for="atribut">Atribut</label>
            <input type="text" class="form-control" name="atribut" maxlength="10" required>
            </div>
			
			<div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="text" class="form-control" name="bobot" maxlength="5" required>
            </div>
			
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=kriteria">Batal</a>
        </div>
    </div>
</form>