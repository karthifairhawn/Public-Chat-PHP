<?php 

if(isset($_POST['message'])){
    session_start();
    include 'conn.php';
    $user_id = $_SESSION['user_id'];
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    mysqli_query($conn, "insert into messages (sender_id, message) values ('$user_id','$message')");
}
























?>