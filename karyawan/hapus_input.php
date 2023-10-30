<?php

$id_input=$_GET['id_input'];

$sql = "DELETE FROM input_nilai WHERE id_input='$id_input'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=input");
}
$conn->close();
?>