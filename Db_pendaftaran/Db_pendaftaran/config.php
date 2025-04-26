<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_pendaftaaran";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Gagal Terhubung dengan database!");
}