setInterval(function() {
    update_chat();
},2000);





function update_chat(message_text) {
    $.ajax({

        url     : "php/update_chat.php",
        method  : "GET",            

        })
        
        .done(function(data) {
 
            $("#chats-container").html(data);
 
        });   

}


