<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @author     Ricko
 * @subpackage Core
 * @version    1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( is_active_sidebar( 'blog-sidebar' )  ) : ?>

<aside id="sidebar" class="sidebar borderbox right" role="complementary">
	<?php if (is_home() || is_category() || is_archive() || is_tag() || is_search() || is_single() || is_date()) dynamic_sidebar('blog-sidebar'); ?>
</aside>
<p>X</p>

<div class="clear"></div>

<?php endif; ?>