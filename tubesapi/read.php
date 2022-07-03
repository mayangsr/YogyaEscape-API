<?php
include('koneksi.php');

$sql = "SELECT * FROM artikel";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id' => $row['id'],
            'nama' => $row['nama'],
            'lokasi' => $row['lokasi'],
            'image' => $row['image'],
	    'deskripsi' => $row['deskripsi'],
	    'author' => $row['author'],
	    'tanggal' => $row['tanggal']
        );
        array_push($array, $data);
    }
}

echo json_encode($array);