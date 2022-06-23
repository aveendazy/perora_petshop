<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://192.168.24.1/perora_petshop/member_api_ubuntu.php'
);

$body_json = $response->getBody();
$result = json_decode($body_json); 

$data = $result->data;

?>

<!doctype html>
<html lang="en">
    <head>
        <title>SAIT KASUS 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="member/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="member/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="member/css/util.css">
        <link rel="stylesheet" type="text/css" href="member/css/main.css">
    <!--===============================================================================================-->
    </head>
    <body>
        <!-- table windows -->
        
        

<h1 style="text-align:center;padding: 30px;"> DAFTAR MEMBER WINDOWS </h1>
        <div style="text-align:center;">
            <a href="form_member.php">
                <button type="button"
                    style="
                        background-color: #4CAF50;
                        border: none;
                        color: white;
                        border-radius: 8px;
                        padding: 10px 10px;
                    "> Tambah Member
                </button>
            </a>
        </div>

        <!-- table ubuntu-->
        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1" style="width: 12%;"> Member ID </th>
                                        <th class="cell100 column2" style="width: 20%;"> Nama </th>
                                        <th class="cell100 column3"> Alamat </th>
                                        <th class="cell100 column4"> Nomor HP </th>
                                        <th class="cell100 column5"> Tanggal Daftar </th>
                                        <th class="cell100 column5"> Aksi </th>
                                    </tr>
                                </thead>
                            </table>
					    </div>
                        <div class="table100-body js-pscroll">
						    <table>
                                <tbody>
                                    <?php
                                        // Include config file
                                        require_once "config_wd.php";
                                        
                                        // Attempt select query execution
                                        $sql = "SELECT * FROM member";
                                        if($result = mysqli_query($mysqli, $sql)){
                                            if(mysqli_num_rows($result) > 0){
                                                while($row = mysqli_fetch_array($result)){
                                                    echo "
                                                    <tr class='row100 body'>
                                                        <td class='cell100 column1' style='width: 12%;'>" . $row['member_id'] . "</td>
                                                        <td class='cell100 column2' style='width: 20%;'>" . $row['nama'] . "</td>
                                                        <td class='cell100 column3'>" . $row['alamat'] . "</td>
                                                        <td class='cell100 column4'>" . $row['no_hp'] . "</td>
                                                        <td class='cell100 column5'>" . $row['tgl_daftar'] . "</td>
                                                        <td class='cell100 column5'>
                                                            <a href='form_update.php?member_id=$row[member_id]'>
                                                                <button type='button'
                                                                    style='
                                                                        background-color: #008CBA;
                                                                        border: none;
                                                                        color: white;
                                                                        border-radius: 8px;
                                                                        padding: 10px 12px;
                                                                    '> Edit
                                                                </button>
                                                            </a>
                                                            <a href='delete_member.php?member_id=$row[member_id]'>
                                                                <button type='button'
                                                                    style='
                                                                        background-color: #f44336;
                                                                        border: none;
                                                                        color: white;
                                                                        border-radius: 8px;
                                                                        padding: 10px 12px;
                                                                    '>Hapus
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                                }
                                                        
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->

        <h1 style="text-align:center;padding: 30px;"> DAFTAR MEMBER UBUNTU </h1>
        <div style="text-align:center;">
            <a href="form_member.php">
                <button type="button"
                    style="
                        background-color: #4CAF50;
                        border: none;
                        color: white;
                        border-radius: 8px;
                        padding: 10px 10px;
                    "> Tambah Member
                </button>
            </a>
        </div>

        <!-- table ubuntu-->
        <div class="limiter">
            <div class="container-table100">
                
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1" style="width: 12%;"> Member ID </th>
                                        <th class="cell100 column2" style="width: 20%;"> Nama </th>
                                        <th class="cell100 column3"> Alamat </th>
                                        <th class="cell100 column4"> Nomor HP </th>
                                        <th class="cell100 column5"> Tanggal Daftar </th>
                                        <th class="cell100 column5"> Aksi </th>
                                    </tr>
                                </thead>
                            </table>
					    </div>
                        <div class="table100-body js-pscroll">
						    <table>
                                <tbody>
                                    <?php
                                        foreach ($data as $value) {
                                            echo "
                                            <tr class='row100 body'>
                                                <td class='cell100 column1' style='width: 12%;'>" . $value->member_id . "</td>
                                                <td class='cell100 column2' style='width: 20%;'>" . $value->nama . "</td>
                                                <td class='cell100 column3'>" . $value->alamat . "</td>
                                                <td class='cell100 column4'>" . $value->no_hp . "</td>
                                                <td class='cell100 column5'>" . $value->tgl_daftar . "</td>
                                                <td class='cell100 column5'>
                                                    <a href='form_update.php?member_id=$value->member_id'>
                                                        <button type='button'
                                                            style='
                                                                background-color: #008CBA;
                                                                border: none;
                                                                color: white;
                                                                border-radius: 8px;
                                                                padding: 10px 12px;
                                                            '> Edit
                                                        </button>
                                                    </a>
                                                    <a href='delete_member.php?member_id=$value->member_id'>
                                                        <button type='button'
                                                            style='
                                                                background-color: #f44336;
                                                                border: none;
                                                                color: white;
                                                                border-radius: 8px;
                                                                padding: 10px 12px;
                                                            '>Hapus
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            ";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->
    </body>
</html>