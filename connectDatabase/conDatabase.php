<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'qldrl';

$conn = new mysqLi($server, $user, $pass, $database);

if ($conn) {
    mysqLi_query($conn, "SET NAME 'utf8' ");
    echo "";
} else {
    echo "Kết nối thất bại";
}