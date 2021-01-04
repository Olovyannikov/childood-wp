<div class="container toys">
	<h2 class="subtitle"><?php the_title(); ?></h2>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					__('Continue reading<span class="screen-reader-text">"%s"</span>', 'mir' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' .esc_html__( 'Pages:', 'mir' ),
				'after' => '</div>',
			) );
			?>
		</div>

	</article>

</div>


