<?php
include 'db.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "DELETE FROM student WHERE Id=$Id";

    if($connection->query($sql)==TRUE)
        {
            header("Location: student-list.php");
        }
}
?>