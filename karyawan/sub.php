<h1 align="center">DATA SUBKRITERIA</h1>
<br><br>
<!-- Pengalaman Kerja -->
<table class="table table-bordered" >
    <thead>
      <tr>
        <th width="60px">No</th>
        <th width="80px">Pengalaman Kerja</th>
		<th width="100px">Bobot</th>
      </tr>
    </thead>
	 <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM pengalaman_kerja ORDER BY id_pengalaman ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_pengalaman']; ?></td>
			<td><?php echo $row['pengalaman_kerja']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
		 </tr>
	 <?php
		 }
		 
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>

<br><br>

<!-- Nilai Tes -->
<table class="table table-bordered">
    <thead>
      <tr>
        <th width="60px">No</th>
        <th width="80px">Nilai Tes</th>
		<th width="100px">Bobot</th>
      </tr>
    </thead>
	 <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM nilai_tes ORDER BY id_nilai ASC";
     if($result = $conn->query($sql)){
		while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_nilai']; ?></td>
			<td><?php echo $row['nilai_tes']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
		 </tr>
	 <?php
		 }
	 }
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>

<br><br>

<!-- Jenjang Pendidikan -->
<table class="table table-bordered">
    <thead>
      <tr>
        <th width="60px">No</th>
        <th width="80px">Jenjang Pendidikan</th>
		<th width="100px">Bobot</th>
      </tr>
    </thead>
	 <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM jenjang_pendidikan ORDER BY id_pendidikan ASC";
     if($result = $conn->query($sql)){
		while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_pendidikan']; ?></td>
			<td><?php echo $row['jenjang_pendidikan']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
		 </tr>
	 <?php
		 }
	 }
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>

<br><br>

<!-- Status -->
<table class="table table-bordered">
    <thead>
      <tr>
        <th width="60px">No</th>
        <th width="80px">Status</th>
		<th width="100px">Bobot</th>
      </tr>
    </thead>
	 <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM status ORDER BY id_status ASC";
     if($result = $conn->query($sql)){
		while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_status']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
		 </tr>
	 <?php
		 }
	 }
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>

<br><br>

<!-- Umur -->
<table class="table table-bordered">
    <thead>
      <tr>
        <th width="60px">No</th>
        <th width="80px">Umur</th>
		<th width="100px">Bobot</th>
      </tr>
    </thead>
	 <tbody>
	<!-- awal proses menampilkan -->
	 <?php
     $sql = "SELECT*FROM umur ORDER BY id_umur ASC";
     if($result = $conn->query($sql)){
		while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_umur']; ?></td>
			<td><?php echo $row['umur']; ?></td>
			<td><?php echo $row['bobot']; ?></td>
		 </tr>
	 <?php
		 }
	 }
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>