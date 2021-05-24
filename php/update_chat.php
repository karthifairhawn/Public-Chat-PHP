<?php 

include 'conn.php';
session_start();

$messages = mysqli_query($conn,"Select * from messages");
$output = "";
$user_id = mysqli_real_escape_string($conn,$_SESSION['user_id']);

while ($row = mysqli_fetch_assoc($messages)){
    if($row['sender_id'] == $user_id){
        $output .= '<div class=outgoing>
                    <span class="text-msg">'.$row['message'].'</span>           
                    </div>';
    }else{
        $sender_id = $row['sender_id'];
        $sender_name = mysqli_query($conn,"Select name from user_info where user_id=$sender_id");
        $sender_name = mysqli_fetch_assoc($sender_name);
        $sender_name = $sender_name['name'];
        $output .= '<div class="incoming">
                    <span class="text-msg ">'.$row['message'].'</span>
                    <span class="chat-user-name">'.$sender_name.'</span>
                    </div>';
    }
}


echo $output;

















?>