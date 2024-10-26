<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Student_Id = $_POST['student_id'];
    $Student_Name = $_POST['name'];
    $Student_Number = $_POST['phone'];
    $Student_Email = $_POST['email'];

    $sql = "INSERT INTO student (Student_Id, Student_Name, Student_Phone, Email) VALUES ('$Student_Id', '$Student_Name', '$Student_Number', '$Student_Email')";
    if($connection->query($sql)==TRUE){
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
    <h1 class="text-center text-4xl my-5">Create student</h1>
    <form action="create-student.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
        <input name="student_id" type="number" placeholder="Enter student Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" placeholder="Enter student Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="phone" type="" placeholder="Enter student phone Number" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="email" type="email" placeholder="Enter student Email" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>