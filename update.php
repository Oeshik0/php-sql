<?php
include 'db.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM student WHERE Id=$Id";

    $result = $connection->query($sql);
    
    $oeshik= $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Id=$_POST['Id'];
        $Student_Id=$_POST['student_id'];
        $Student_Name=$_POST['name'];
        $Student_Phone=$_POST['phone'];
        $Email=$_POST['email'];

        $sql="UPDATE student SET Student_Id='$Student_Id', Student_Name= '$Student_Name', Student_Phone='$Student_Phone', Email='$Email' WHERE Id = $Id";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: student-list.php");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Update student</h1>
    <form action="update.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
    <input name="Id" type="hidden" value="<?= $oeshik['Id']; ?>" placeholder="Enter student id" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="student_id" type="number" value="<?= $oeshik['Student_Id']; ?>" placeholder="Enter student Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" value="<?= $oeshik['Student_Name']; ?>" placeholder="Enter student Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="phone" type="" value="<?= $oeshik['Student_Phone']; ?>" placeholder="Enter student phone Number" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="email" value="<?= $oeshik['Email']; ?>" type="email" placeholder="Enter student Email" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>