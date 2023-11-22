<?php

$servername="sql311.infinityfree.com";
$uname="if0_35477637";
$pass="ge5mn6bf5hzDu";
$db="if0_35477637_gymnsb";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT SUM( (curr_weight - ini_weight) / ini_weight * 100) FROM members WHERE user_id='$id'";
        $amountsum = mysqli_query($conn, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo (int)$row_amountsum['SUM( (curr_weight - ini_weight) / ini_weight * 100)'];

                
?>