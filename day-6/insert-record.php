<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");

if($_POST){
    $id = $_POST['txt1'];
    $name = $_POST['txt2'];
    $gender = $_POST['txt3'];
    

    $q = mysqli_query($connection, "insert into tbl_user (user_id,user_name,user_gender) values('{$id}','{$name}','{$gender}')") or die("error". mysqli_error($connection));

    if($q){
        echo "<script>alert('record added');</script>";
    }
}
?>

<html>
<body>
<form method="post">
 id : <input type="txt" name="txt1"/>
 name : <input type="text" name="txt2"/>
 gender : <select name="txt3">
    <option>male</option>
    <option>female</option>
    </select>
    <input type="submit"/>
</form>
</body>

</html>