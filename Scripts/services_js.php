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
        },
        error: function () {
            $('#services-content').html('<p>Error loading content. Please try again later.</p>');
        }
    });
}

//handle browser back /forth buttons
window.addEventListener('popstate', function(event) {
    // Get service from URL
    const urlParams = new URLSearchParams(window.location.search);
    const service = urlParams.get('service') || 'construction';
    
    // Load the service via AJAX
    const base_url = "<?php echo $BASE_URL; ?>";
    $.ajax({
        url: base_url + '/view/services/' + service + '.php',
        method: 'GET',
        data: { BASE_URL: base_url },
        success: function (data) {
            $('#services-content').html(data);
            // Update active link
            $('.col-md-3 li a').removeClass('active-link');
            $(`a[onclick*="${service}"]`).addClass('active-link');
        }
    });
});

</script>