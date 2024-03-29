<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bloghub
 */

get_header(); ?>

	<section id="body-column-type">

				<h1><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'bloghub' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			<!-- .page-header -->
  <div class="container">
    <div class="row"> 

		<?php
		if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>
	</div>
</section>

<?php

get_footer();
