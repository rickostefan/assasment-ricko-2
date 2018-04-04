<?php
/**
 * Website Footer Assastment
 * 
 * @author     Ricko
 * @subpackage Core
 * @version    1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
} ?>

<footer id="footer" role="contentinfo">
</footer>

<script>
  jQuery(document).ready(function(){
    jQuery('#home').append('target edit 1<br>');
  });
  jQuery(document).ready(function(){
    jQuery('#sample-page-1').append('target edit 2<br>');
  });
  jQuery(document).ready(function(){
    jQuery('#sample-page-2').append('target edit 3<br>');
  });
</script>

<?php wp_footer(); ?> 
	</body>
</html>