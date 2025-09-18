<div id = 'chat'>
    <div id = 'chat-link-container'>
        <div id = 'chat-link' class = 'fb'>
            <span>Messenger</span>
            <img src = '<?php echo $BASE_URL;?>/Icons/fb-black.png'>
        </div>
        <div id = 'chat-link' class = 'wa' onclick = "location.href = 'https://wa.me/260777231415'">
            <span>Whatsapp</span>
            <img src = '<?php echo $BASE_URL;?>/Icons/app.png'>
        </div>
    </div>
    <div id = 'chat-btn' onclick = 'openChat()'>
        <img src = '<?php echo $BASE_URL;?>/Icons/chat.gif'>
        <div id = 'chat-btn-text'>Let's Chat</div>
    </div>
</div>