        </div><!-- .main_wrapper -->
	</div><!-- .site_wrapper -->
	<?php


	if (!is_404()) {
			$footer = apply_filters('theme/print_footer', false);

			if (false === $footer) {
				gt3_get_default_footer();
			}
		}


	wp_footer();

    ?> 
     <script type="text/javascript">
 
    jQuery(function($) {
 
        $( '.wpf-disable-field input, .wpf-disable-field textarea' ).attr({
             readonly: "readonly",
             tabindex: "-1"
        });
         
         
        $('.read-more-content').addClass('hide')
        $('.read-more-show, .read-more-hide').removeClass('hide')
        
        // Set up the toggle effect:
        $('.read-more-show').on('click', function(e) {
            $(this).next('.read-more-content').removeClass('hide');
            $(this).addClass('hide');
            e.preventDefault();
        });
        
        $('.read-more-hide').on('click', function(e) {
            $(this).parent('.read-more-content').addClass('hide');
            var moreid=$(this).attr("more-id");
            $('.read-more-show#'+moreid).removeClass('hide');
            e.preventDefault();
        });
         $('.modal.gt3-core-button-modal').hide();
        $('.careerbtn a.button_size_elementor_normal').on('click', function(e) {
            $('.modal.gt3-core-button-modal').show();
        });
         
        $('.modal .close_button_modal').on('click', function(e) {
            $('.modal.gt3-core-button-modal').hide();
        });
        
        
         $('.gt3_linear-loading-center-absolute .gt3_linear-object').prepend($('<img class="" src="https://adinndigital.com/wp-content/uploads/2021/04/adinnlogo.png" alt="Adinn" title="adinnlogo">'));
         
    });

    </script>
</body>
</html>
