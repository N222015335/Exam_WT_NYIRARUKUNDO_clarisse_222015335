<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "anna"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}