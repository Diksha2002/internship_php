<?php

$connection = mysqli_connect("localhost","root","","db_internship");
if($_POST)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
   
    $q = mysqli_query($connection, "insert into tbl_user (user_name,user_gender) values('{$name}','{$gender}')") or die(mysqli_error($connection));
    if($q)
    {
        echo "<script>alert('Record added');</script>";
    }        
}
?>

<html>
    
    <body>
        <form method ="post">
            name : <input type="text" name="txt1"/></br>
            gender :male<input type="radio" value="male" name="txt2"/>
            female<input type="radio" value="female" name="txt2"/>       
            <input type="submit"/>
        </form>
    </body>
</html>

echo "<a href ='tableee.php'>display record</a>";