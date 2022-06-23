<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$id = $_GET['member_id'];

$response = $client->request(
    'GET',
    'http://192.168.24.1/perora_petshop/member_api_ubuntu.php?member_id=' . $id
);

$body_json = $response->getBody();
$result = json_decode($body_json); 

$data = $result->data;

?>

<html>
    <head>
        <title>Form Member</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="form/form.css">
    </head>
    <body>
        <h1 style="text-align:center;padding-top: 50px;"> UPDATE DATA MEMBER </h1>
        <?php
            foreach ($data as $value) {
                echo "
                    <form method='POST' action='update_member.php?member_id=$value->member_id'>
                        <label for='Member ID'>Member ID</label>
                        
                        <input type='text' id='member_id' name='member_id' value='$value->member_id' autocomplete='off' required />
                        
                        <label for='text'>Nama</label>
                        <input type='text' id='nama' name='nama' value='$value->nama' autocomplete='off' required />

                        

                        <label for='text'>Alamat</label>
                        <input type='text' id='alamat' name='alamat' value='$value->alamat' autocomplete='off' required />
                        

                        <label for='text'>No HP</label>
                        <input type='text' id='no_hp' name='no_hp' value='$value->no_hp' autocomplete='off' required />

                        <label for='text'>Tanggal Daftar</label>
                        <input type='date' id='tgl_daftar' name='tgl_daftar' value='$value->tgl_daftar' autocomplete='off' required />

                        <input type='submit' name='submit' value='Submit' />
                        

                    </form>
                ";
            } 
        ?>
    </body>
</html>
