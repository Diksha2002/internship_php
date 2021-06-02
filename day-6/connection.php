<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function
mysqli_connect($host, $username, $passwd, $dbname);

//connection function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
         "insert into tbl_user(user_id,user_name,user_gender) values('1','diksha','female')") 
         or die("error". mysqli_error($connection));

         if($q){
            echo "<script>alert('record added');</script>";
        }