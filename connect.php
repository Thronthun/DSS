<?php
$host='localhost';
$HostUser='root';
$HostPass='123456789';
$DatabaseName='test';

$connect = mysqli_connect($host, $HostUser, $HostPass, $DatabaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>