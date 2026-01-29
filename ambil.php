<?php
include "koneksi.php";

$bagian = $_GET['bagian'];

$q = mysqli_query($conn, "SELECT * FROM kerusakan WHERE bagian='$bagian' ORDER BY id DESC");

$data = [];
while ($row = mysqli_fetch_assoc($q)) {
    $data[] = $row;
}

echo json_encode($data);
