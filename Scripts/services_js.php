<script>
    // Services page script
  function  servicesLinks(btn,page,base_url){
    // Remove 'active' class from all links
    $('col-md-3 li a').removeClass('active-link');
    // Add 'active' class to the clicked link
    $(btn).addClass('active-link');
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