<?php
$mysqli = new mysqli("localhost", "root", "", "dbbarang");
if ($mysqli->connect_error) {
    die("Koneksi gagal :".$mysqli->connect_error);
}
?>