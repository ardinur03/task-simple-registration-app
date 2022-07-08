<?php

$hostname   = "localhost";
$user       = "root";
$password   = "";
$db_name    = "db_pmb";

$db_conn = mysqli_connect($hostname, $user, $password, $db_name);

session_start();

if (!$db_conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
