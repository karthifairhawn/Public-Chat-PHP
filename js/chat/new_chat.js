

$("#send-btn").on("click", function(){
    var message = $("#msg-input").val();
    new_chat(message);
})

function new_chat(message_text) {
    $.ajax({

        url     : "php/new_chat.php",
        method  : "POST",
     
            data: { 
              message                   	:   message_text
            }
        })
    $("#msg-input").val("");
}