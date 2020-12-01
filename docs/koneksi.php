<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "latihan_impor1";
$db     = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($db->connect_errno) {
    echo 'Gagal koneksi ke database';
}
