<script>
    function openChat()
    {
      if($('#chat-link-container').css('display') == 'none')
      {
         $('#chat-link-container').slideDown(200); 
         $('#chat').css('background-color','white');
      }
      else
      {
         $('#chat-link-container').slideUp(200);
         $('#chat').css('background-color','transparent');
      }
    }
</script>