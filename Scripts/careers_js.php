<script>
   function showJobStatus()
   {
        location.href = '#vacancies';
        $('#job-ad-status').css({'color':'red','font-weight':'500'});
        setTimeout(function()
        {
          $('#job-ad-status').css({'color':'black','font-weight':'normal'});
        },2000);
   } 
</script>