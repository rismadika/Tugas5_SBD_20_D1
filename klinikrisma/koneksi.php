<?php
$host = "localhost";
$user = "admindika";
$pass = "312010051";
$db = "klinik_312010051";
$conn = mysqli_connect("$host","$user","$pass","$db");

if ($conn == false)
{
	echo "Koneksi ke server gagal.";
	die();
}	
?>