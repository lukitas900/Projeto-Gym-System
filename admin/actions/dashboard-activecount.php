<?php

$servername="sql311.infinityfree.com";
$uname="if0_35477637";
$pass="ge5mn6bf5hzDu";
$db="gymnsb";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM members WHERE status ='Active'";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>