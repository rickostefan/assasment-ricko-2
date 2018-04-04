<?php
/**
 * main template
 * 
 * @author     Ricko
 * @subpackage Core
 * @version    1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

get_header(); ?>

<div role="main">
	<div class="link-back">
		<a title="Back" href="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></i> Back</a>
	</div>
	
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header id="lead">
			<div class="group">
				<h1 class="page-title screen-reader-text">
					<span class="the-title"><?php single_post_title(); ?></span>
				</h1>
			</div>
		</header>
	<?php endif; ?>

	<section class="blog_wrap">
		<article id="entry">

			<div id="post-entry" class="index borderbox left">

				<?php if (have_posts()) :
				
					$i = 0; while (have_posts()) : the_post(); $i++; 
						get_template_part( 'template-parts/content', 'blog' );
					endwhile; ?>

					<div class="post-nav">
						<p class="left"><?php previous_posts_link('<span class="aquo">&laquo;</span> Previous Entries') ?></p>
						<p class="right"><?php next_posts_link('Next Entries <span class="aquo">&raquo;</span>','') ?></p>
						<div class="clear"></div>
					</div>

				<?php // If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>

			</div><!-- .post-entry -->

			<?php get_sidebar(); ?>

		</article>
	</section><!-- .blog_wrap -->

</div>

<?php get_footer();


/* Omit closing PHP tag to avoid "Headers already sent" issues. */