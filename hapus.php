<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM kerusakan WHERE id='$id'");

echo json_encode(["status" => "deleted"]);
