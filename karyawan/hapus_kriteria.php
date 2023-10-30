<?php

$id=$_GET['id'];

$sql = "DELETE FROM kriteria WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=kriteria");
}
$conn->close();
?>