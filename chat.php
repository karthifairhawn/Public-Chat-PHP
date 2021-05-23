<?php
session_start();

include 'php/conn.php';
$user_id = $_SESSION['user_id'];
$name = mysqli_query($conn, "Select name from user_info where user_id=$user_id");
$name = mysqli_fetch_assoc($name);
$name =$name['name'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strange Meet</title>
    <link rel="stylesheet" href="css/chat-area.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="content">

        <!-- Header Starts -->
        <div class="header">
            <div class="left">
                <img src="img/img2.jpeg">
                <span class="name"><?php echo $name ?></span>
            </div>
            <div class="right">
                <button class="delete-acct-btn">DELETE ACCOUNT</button>
                <a href="php/logout.php"><button class="logout-btn">LOGOUT</button></a>
            </div>
        </div>
        <!-- Header Ends -->

        <!-- Chat Area -->
        <div class="chats">       
            

            <div class=outgoing>
                <span class="text-msg" >Hey, Good Morning</span>           
            </div>     


            <div class="incoming">
                <span class="text-msg ">Hey, Good Morning</span>
                <span class="chat-user-name">@karthifairhawn</span>
            </div>
            
            <div class=outgoing>
                <span class="text-msg" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit</span>           
            </div>     


            <div class="incoming">
                <span class="text-msg ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ipsa quod. Blanditiis excepturi sed labore commodi corporis non voluptates ab recusandae similique? Minus deserunt rerum ab possimus omnis amet blanditiis!</span>
                <span class="chat-user-name">@karthifairhawn</span>
            </div>
            
            <div class=outgoing>
                <span class="text-msg" >ab recusandae similique? Minus deserunt rerum ab possimus omnis amet blanditiis!</span>           
            </div>     


            <div class="incoming">
                <span class="text-msg ">Sure!</span>
                <span class="chat-user-name">@karthifairhawn</span>
            </div>

            <div class=outgoing>
                <span class="text-msg">ab recusandae similique? </span>           
            </div>    
            
            <div class="incoming">
                <span class="text-msg ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ipsa quod. Blanditiis excepturi sed labore commodi corporis non voluptates ab recusandae similique? Minus deserunt rerum ab possimus omnis amet blanditiis!</span>
                <span class="chat-user-name">@karthifairhawn</span>
            </div>
            
            <div class=outgoing>
                <span class="text-msg" >ab recusandae similique? Minus deserunt rerum ab possimus omnis amet blanditiis!</span>           
            </div>     



            <div class="incoming">
                <span class="text-msg ">Thank you!</span>
                <span class="chat-user-name">@karthifairhawn</span>
            </div>
            
            

        </div><hr>
        <!-- Chat Area Ends-->

        <!-- Chat Box -->
        <div class="chat-box">
            <input id="msg-input" type="text" placeholder="Enter message to send...">
            <button class="send-text" id="send-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span>SEND</span>
            </button>
        </div>
        <!-- Chat Box Ends-->

    </div>
    <script src="js/chat/new_chat.js"></script>

</body>
</html>