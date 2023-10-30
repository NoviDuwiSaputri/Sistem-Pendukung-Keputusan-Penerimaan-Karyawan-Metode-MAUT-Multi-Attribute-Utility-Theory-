<h1 align="center">HASIL SELEKSI KARYAWAN</h1>
<!-- Total -->
<table class="table table-bordered">
	<thead>
      <tr>        
		<th>ID</th>
        <th width="200px">Nama Karyawan</th>
		<th>Total MAUT</th>
		<th>Hasil Seleksi</th>
      </tr>
    </thead>
	<tbody>
	<?php

		//Bobot array {C1=0.25, C2=0.25, C3=0.2, C4=0.15, C5=0.15}
		$bobot = array(0.25,0.25,0.20,0.15,0.15);
		
			//max
			$max=mysqli_query($conn,"SELECT MAX(pengalaman_kerja) AS max1, MAX(nilai_tes) AS max2,
			MAX(jenjang_pendidikan) AS max3, MAX(status) AS max4, MAX(umur) AS max5 FROM input_nilai");			
			$a=mysqli_fetch_assoc($max);			
						
			//min
			$min=mysqli_query($conn,"SELECT MIN(pengalaman_kerja) AS min1,  MIN(nilai_tes) AS min2,
			MIN(jenjang_pendidikan) AS min3, MIN(status) AS min4, MIN(umur) AS min5 FROM input_nilai");
			$b=mysqli_fetch_assoc($min);
			
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
		$sel="Lulus";
		
		foreach ($ket as $item){?>
		<tr>
			<th><?php echo $id ?></th>
			<th><?php echo$item['nama_karyawan']?></th>
			<th><?php echo$item['maut']?></th>
			<th><?php echo"$sel"?></th>
		</tr>
		<?php
		$id++;
		if ($id>=4){
			$sel="Tidak Lulus  ";
		}else{
			$sel="Lulus";
		}
		}
	?>
	</tbody>
</table>
<br>