<script>
    // Services page script
  function  servicesLinks(btn,page,base_url){
    $(btn).addClass('color', '#E7863CFF');
    $.ajax({
        url: '<?php echo $BASE_URL;?>/view/services/' + page + '.php',
        method: 'GET',
        data:{BASE_URL: base_url},
        success: function(data) {
            $('#services-content').html(data);
        },
        error: function() {
            $('#services-content').html('<p>Error loading content. Please try again later.</p>');
        }
    });
  }
</script>