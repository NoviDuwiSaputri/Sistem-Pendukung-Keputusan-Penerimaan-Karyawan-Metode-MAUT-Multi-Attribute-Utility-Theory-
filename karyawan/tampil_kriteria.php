<h1 align="center">DATA KRITERIA</h1>
<a class="btn btn-primary" href="?page=kriteria&action=tambah" style="margin-bottom: 10px">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th width="60px">ID Kriteria</th>
        <th width="80px">Kode</th>
        <th width="200px">Nama Kriteria</th>
		<th width="100px">Atribut</th>
		<th width="100px">Bobot</th>
		<th width="100px">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM kriteria ORDER BY id ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode']; ?></td>
			<td><?php echo $row['nama_kriteria']; ?></td>
			<td><?php echo $row['atribut']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
			<td align="center">
				<a class="btn btn-warning" href="?page=kriteria&action=update&id=<?php echo $row['id']; ?>">Edit</a>
				<a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=kriteria&action=hapus&id=<?php echo $row['id']; ?>">Hapus</a>
			</td>
		 </tr>
	 <?php
		 }
		 $conn->close();
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>