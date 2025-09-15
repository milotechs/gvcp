<script>
 function servicesLinks(btn, page, base_url) {
    // Remove active class from all service links
    $('.col-md-3 li a').removeClass('active-link');

    // Add active class to the clicked link
    $(btn).addClass('active-link');

    // Load content dynamically
    $.ajax({
        url: base_url + '/view/services/' + page + '.php',
        method: 'GET',
        data: { BASE_URL: base_url },
        success: function (data) {
            $('#services-content').html(data);
            $('#services-mini-header ul li a').css({'color': 'black','font-weight' : 'normal'});
            $("."+page).css({'color': '#E7863CFF','font-weight' : 'bold'});
        },
        error: function () {
            $('#services-content').html('<p>Error loading content. Please try again later.</p>');
        }
    });
}


</script>