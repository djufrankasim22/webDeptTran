<?php
include "koneksi.php";

$data = json_decode(file_get_contents("php://input"), true);

$tanggal  = $data['tanggal'];
$type     = $data['type'];
$nolot    = $data['nolot'];
$masalah  = $data['masalah'];
$tindakan = $data['tindakan'];
$status   = $data['status'];
$bagian   = $data['bagian'];

$sql = "INSERT INTO kerusakan 
(tanggal, type, nolot, masalah, tindakan, status, bagian)
VALUES 
('$tanggal','$type','$nolot','$masalah','$tindakan','$status','$bagian')";

mysqli_query($conn, $sql);

echo json_encode(["status" => "ok"]);
