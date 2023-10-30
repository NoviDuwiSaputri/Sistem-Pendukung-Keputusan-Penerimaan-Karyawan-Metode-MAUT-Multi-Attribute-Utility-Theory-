<h1 align="center">DATA KARYAWAN</h1>
<a class="btn btn-primary" href="?page=karyawan&action=tambah" style="margin-bottom: 10px">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>ID </th>
        <th width="200px">Nama Karyawan</th>
        <th>ALamat</th>
		<th>No Hp</th>
		<th>Pengalaman Kerja</th>
		<th>Nilai Tes</th>
		<th>Jenjang Pendidikan</th>
		<th>Status</th>
		<th>Umur</th>
		<th width="250px">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM karyawan ORDER BY id_karyawan ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_karyawan']; ?></td>
			<td><?php echo $row['nama_karyawan']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['nohp']; ?></td>
			<td><?php echo $row['pengalaman_kerja']; ?></td>
			<td><?php echo $row['nilai_tes']; ?></td>
			<td><?php echo $row['jenjang_pendidikan']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo $row['umur']; ?></td>
			<td align="center">
				<a class="btn btn-warning" href="?page=karyawan&action=update&id_karyawan=<?php echo $row['id_karyawan']; ?>">Edit</a>
				<a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=karyawan&action=hapus&id_karyawan=<?php echo $row['id_karyawan']; ?>">Hapus</a>
			</td>
		 </tr>
	 <?php
		 }
		 $conn->close();
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>