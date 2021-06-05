<?php
//db connection
$connection = mysqli_connect("localhost","root","","db_internship");
//query
$q = mysqli_query($connection, "select * from tbl_user") or die("error". mysqli_error($connection));
//below function will fetch data as numerical array 
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2];

//mysqli 
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);

echo $row[0].$row[1].$row[2];
echo $row['user_id'].$row['user_name'].$row['user_gender

'];