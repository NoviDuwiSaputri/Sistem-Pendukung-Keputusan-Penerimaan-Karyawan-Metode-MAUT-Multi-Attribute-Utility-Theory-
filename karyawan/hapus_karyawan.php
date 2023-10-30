<?php

$id_karyawan=$_GET['id_karyawan'];

$sql = "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=karyawan");
}
$conn->close();
?>