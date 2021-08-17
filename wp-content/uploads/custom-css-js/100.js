<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  	$(window).scroll(function() {
            if ($(window).scrollTop() > 10) {
                $('#masthead').addClass('scrolled');
               $('#masthead-responsive').addClass('scrolled');
            } else {
                $('#masthead').removeClass('scrolled');
               $('#masthead-responsive').removeClass('scrolled');
            }
        });
  
  	$(document).ready(function() {
        var wi = $(window).width();
        if (wi < 1139) {
          	$('#masthead').addClass('hidden');
          	$('#masthead-responsive').removeClass('hidden');
          	$('#masthead-responsive').addClass('show');
        } else {
          	$('#masthead-responsive').removeClass('show');
          	$('#masthead-responsive').addClass('hidden');
        }
    });
  
	$(window).resize(function() {
        var wi = $(window).width();
        if (wi < 1139) {
          	$('#masthead').addClass('hidden');
          	$('#masthead-responsive').removeClass('hidden');
          	$('#masthead-responsive').addClass('show');
        } else {
          $('#masthead').removeClass('hidden');
          $('#masthead-responsive').addClass('hidden');
          $('#masthead-responsive').removeClass('show');
        }
    });
  
  	$('.burger').on('click', function(){
      	 $(this).find('.icon').toggleClass('opened');
      	 $('#masthead-responsive').find('.menu');
      
      	if ($('#masthead-responsive').find('.menu')
                    .attr('aria-hidden') == 'true')
                    $('#masthead-responsive').find('.menu')
                    .attr('aria-hidden', 'false')
                    .show('fast');
                else
                    $('#masthead-responsive').find('.menu')
                    .attr('aria-hidden', 'true')
                    .hide('slow');
    });
  
});


</script>
<!-- end Simple Custom CSS and JS -->
