<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// hapus di windows
include_once 'config_wd.php';
$_id = $_GET['member_id'];

    $sql = "delete from member where member_id=$_id";
    if (mysqli_query($mysqli, $sql)) {
        echo "<center>Record has been deleted successfully in local database!<br>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
    }

    
// hapus di ubuntu

$client = new Client();

$id = $_GET['member_id'];

$response = $client->request(
    'DELETE',
    'http://192.168.24.1/perora_petshop/member_api_ubuntu.php?member_id=' . $id
);

if($response->getStatusCode()) {
    header("location:get_member.php");
} else {
    echo "Failed";
}

?>

