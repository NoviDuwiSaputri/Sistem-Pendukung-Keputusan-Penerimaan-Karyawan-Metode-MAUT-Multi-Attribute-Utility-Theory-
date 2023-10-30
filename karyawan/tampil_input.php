<h1 align="center">NILAI BOBOT</h1>
<a class="btn btn-primary" href="?page=input&action=tambah" style="margin-bottom: 10px">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>ID </th>
        <th width="200px">Nama Karyawan</th>
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
     $sql = "SELECT*FROM input_nilai ORDER BY id_input ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
			<td><?php echo $row['id_input']; ?></td>
			<td><?php echo $row['nama_karyawan']; ?></td>
			<td><?php echo $row['pengalaman_kerja']; ?></td>
			<td><?php echo $row['nilai_tes']; ?></td>
			<td><?php echo $row['jenjang_pendidikan']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo $row['umur']; ?></td>
			<td align="center">
				<a class="btn btn-warning" href="?page=input&action=update&id_input=<?php echo $row['id_input']; ?>">Edit</a>
				<a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=input&action=hapus&id_input=<?php echo $row['id_input']; ?>">Hapus</a>
			</td>
		 </tr>
	 <?php
		 }
		 
	 ?>
	 <!-- akhir proses menampilkan -->
   </tbody>
</table>
<br>

<!-- Max Min -->
<h1 align="center">NILAI MAX & MIN</h1>
<table class="table table-bordered">
	<thead>
      <tr>        
        <th width="200px">Nilai</th>
		<th>Pengalaman Kerja</th>
		<th>Nilai Tes</th>
		<th>Jenjang Pendidikan</th>
		<th>Status</th>
		<th>Umur</th>
      </tr>
    </thead>
	<tbody>
		<?php
			//max
			$max=mysqli_query($conn,"SELECT MAX(pengalaman_kerja) AS max1, MAX(nilai_tes) AS max2,
			MAX(jenjang_pendidikan) AS max3, MAX(status) AS max4, MAX(umur) AS max5 FROM input_nilai");			
			$a=mysqli_fetch_assoc($max);			
						
			//min
			$min=mysqli_query($conn,"SELECT MIN(pengalaman_kerja) AS min1,  MIN(nilai_tes) AS min2,
			MIN(jenjang_pendidikan) AS min3, MIN(status) AS min4, MIN(umur) AS min5 FROM input_nilai");
			$b=mysqli_fetch_assoc($min);
			
			 ?>			 
				 <tr>
					<td>Nilai MAX</td>
					<td><?php echo $a['max1']; ?></td>
					<td><?php echo $a['max2']; ?></td>
					<td><?php echo $a['max3']; ?></td>
					<td><?php echo $a['max4']; ?></td>
					<td><?php echo $a['max5']; ?></td>
				 </tr>
				 <tr>
					<td>Nilai MIN</td>
					<td><?php echo $b['min1']; ?></td>
					<td><?php echo $b['min2']; ?></td>
					<td><?php echo $b['min3']; ?></td>
					<td><?php echo $b['min4']; ?></td>
					<td><?php echo $b['min5']; ?></td>
				 </tr>
		 <?php
			 
		?>
	</tbody>
</table>
<br>

<!-- Normalisasi Matrik -->
<h1 align="center">NORMALISASI MATRIK</h1>
<table class="table table-bordered">
	<thead>
      <tr>        
		<th>ID</th>
        <th width="200px">Nama Karyawan</th>
		<th>Pengalaman Kerja</th>
		<th>Nilai Tes</th>
		<th>Jenjang Pendidikan</th>
		<th>Status</th>
		<th>Umur</th>
      </tr>
    </thead>
	<tbody>
	<?php
		$input = mysqli_query($conn,"SELECT*FROM input_nilai");
		$id=1;
		while($dt = mysqli_fetch_array($input)){
			echo "<tr>
					<td>$id</td>
					<td>".$dt['nama_karyawan']."</td>
					<td>".round(($dt['pengalaman_kerja']-$b['min1'])/($a['max1']-$b['min1']),2)."</td>
					<td>".round(($dt['nilai_tes']-$b['min2'])/($a['max2']-$b['min2']),2)."</td>
					<td>".round(($dt['jenjang_pendidikan']-$b['min3'])/($a['max3']-$b['min3']),2)."</td>
					<td>".round(($dt['status']-$b['min4'])/($a['max4']-$b['min4']),2)."</td>
					<td>".round(($dt['umur']-$b['min5'])/($a['max5']-$b['min5']),2)."</td>
				</tr>";
				$id++;
		}
	?>
	</tbody>
</table>
<br>

<!-- Matrik Kriteria Bobot-->
<h1 align="center">MATRIK KRITERIA BOBOT</h1>
<table class="table table-bordered">
	<thead>
      <tr>        
		<th>ID</th>
        <th width="200px">Nama Karyawan</th>
		<th>Pengalaman Kerja (0.25)</th>
		<th>Nilai Tes (0.25)</th>
		<th>Jenjang Pendidikan (0.20)</th>
		<th>Status (0.15)</th>
		<th>Umur (0.15)</th>
		<th>Total</th>
      </tr>
    </thead>
	<tbody>
	<?php
		//Bobot array {C1=0.25, C2=0.25, C3=0.2, C4=0.15, C5=0.15}
		$bobot = array(0.25,0.25,0.20,0.15,0.15);
					
		$data = mysqli_query($conn,"SELECT*FROM input_nilai");
		$id=1;
		while($dt1 = mysqli_fetch_array($data)){
			echo "<tr>
					<td>$id</td>
					<td>".$dt1['nama_karyawan']."</td>
					<td>".round(($dt1['pengalaman_kerja']-$b['min1'])/($a['max1']-$b['min1'])*$bobot[0],2)."</td>
					<td>".round(($dt1['nilai_tes']-$b['min2'])/($a['max2']-$b['min2'])*$bobot[1],2)."</td>
					<td>".round(($dt1['jenjang_pendidikan']-$b['min3'])/($a['max3']-$b['min3'])*$bobot[2],2)."</td>
					<td>".round(($dt1['status']-$b['min4'])/($a['max4']-$b['min4'])*$bobot[3],2)."</td>
					<td>".round(($dt1['umur']-$b['min5'])/($a['max5']-$b['min5'])*$bobot[4],2)."</td>
					<td>".round((($dt1['pengalaman_kerja']-$b['min1'])/($a['max1']-$b['min1'])*$bobot[0])+
						(($dt1['nilai_tes']-$b['min2'])/($a['max2']-$b['min2'])*$bobot[1])+
						(($dt1['jenjang_pendidikan']-$b['min3'])/($a['max3']-$b['min3'])*$bobot[2])+
						(($dt1['status']-$b['min4'])/($a['max4']-$b['min4'])*$bobot[3])+
						(($dt1['umur']-$b['min5'])/($a['max5']-$b['min5'])*$bobot[4]),2)."</td>
				</tr>";
				$id++;
		}
	?>
	</tbody>
</table>
<br>

<!-- Total -->
<h1 align="center">RANGKING MAUT</h1>
<table class="table table-bordered">
	<thead>
      <tr>        
		<th>ID</th>
        <th width="200px">Nama Karyawan</th>
		<th>Perangkingan Total MAUT</th>
      </tr>
    </thead>
	<tbody>
	<?php
		//Bobot array {C1=0.25, C2=0.25, C3=0.2, C4=0.15, C5=0.15}
		$bobot = array(0.25,0.25,0.20,0.15,0.15);
					
		$data = mysqli_query($conn,"SELECT*FROM input_nilai");
		while($dta = mysqli_fetch_array($data)){
			$maut=round((($dta['pengalaman_kerja']-$b['min1'])/($a['max1']-$b['min1'])*$bobot[0])+
						(($dta['nilai_tes']-$b['min2'])/($a['max2']-$b['min2'])*$bobot[1])+
						(($dta['jenjang_pendidikan']-$b['min3'])/($a['max3']-$b['min3'])*$bobot[2])+
						(($dta['status']-$b['min4'])/($a['max4']-$b['min4'])*$bobot[3])+
						(($dta['umur']-$b['min5'])/($a['max5']-$b['min5'])*$bobot[4]),2);
			$ket[]=array('nama_karyawan'=>($dta['nama_karyawan']),'maut'=>$maut);		
		}
		//mengurutkan data
		foreach ($ket as $key=> $isi){
			$nama[$key] = $isi['nama_karyawan'];
			$total[$key] = $isi['maut'];
		}
		array_multisort($total,SORT_DESC,$ket);
		$id=1;
		
		foreach ($ket as $item){?>
		<tr>
			<th><?php echo $id ?></th>
			<th><?php echo$item['nama_karyawan']?></th>
			<th><?php echo$item['maut']?></th>
		</tr>
		<?php
		$id++;
		
		}
	?>
	</tbody>
</table>
<br>