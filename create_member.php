<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

//memasukkan data ke database local

include_once 'config_wd.php';
if(isset($_POST['submit']))
{    
$member_id = $_POST['member_id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_daftar = $_POST['tgl_daftar'];

     $sql = "INSERT INTO member (member_id,nama,alamat,no_hp,tgl_daftar)
     VALUES ('$member_id','$nama','$alamat','$no_hp','$tgl_daftar')";
     if (mysqli_query($mysqli, $sql)) {
        echo "<center>New record has been added successfully to local database!<br>";
     } else {
        echo "Error:";
     }
}

// insert to ubuntu

$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.24.1/perora_petshop/member_api_ubuntu.php', [
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