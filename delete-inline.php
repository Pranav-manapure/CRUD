<?php

echo $stu_id = $_GET['id'];

	
	include "config.php";
    $sql="DELETE FROM students WHERE sid = {$stu_id}";

    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");//will return asso array
    header("Location: http://localhost/crud/index.php");
    mysqli_close($conn);
?>