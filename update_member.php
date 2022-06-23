<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$id = $_GET['member_id'];

// update windows

include_once 'config_wd.php';

$member_id = $_POST['member_id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_daftar = $_POST['tgl_daftar'];


//update data ke database local
     $sql = "UPDATE member SET
     nama='$nama', 
     alamat='$alamat', 
     no_hp='$no_hp', 
     tgl_daftar='$tgl_daftar' 
     WHERE member_id=$member_id";

     if (mysqli_query($mysqli, $sql)) {
        echo "<center>Record has been updated successfully to local database!<br>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
     }



// update ubuntu

$response = $client->request(
    'POST',
    'http://192.168.24.1/perora_petshop/member_api_ubuntu.php?member_id=' . $id , [
    'form_params' => [
            'member_id' => $_POST['member_id'],
            'nama' => $_POST['nama'],
            'alamat' => $_POST['alamat'],
	        'no_hp' => $_POST['no_hp'],
	        'tgl_daftar' => $_POST['tgl_daftar']
        ]
    ]
);

if($response->getStatusCode()) {
    header("location:get_member.php");
} else {
    echo "Failed";
}

?>