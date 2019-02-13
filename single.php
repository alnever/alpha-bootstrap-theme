<?php get_header(); ?>

	<?php if (have_posts()):  ?>
	<?php while(have_posts()): the_post(); ?>
		<!-- site header -->
		<div class="header-post" <?php _e((has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url() . ')"' : '')); ?>>
			<div class="header-text-block">
				<div class="post-title">
					<?php the_title(); ?>
				</div>
				<div class="post-info">
					<span><?php the_date(); ?></span>
					<span><?php the_author_link(); ?></span>
				</div>
			</div>
		</div>

		<!-- site body -->
		<div class="container p-0">

				<div class="row m-0">

					<div class="col-12 pb-2 pt-2 border border-info rounded">
						<p><?php the_content(); ?></p>
		    			<hr>
						<p><?php the_category(); ?></p>
		    			<p><?php the_tags(); ?></p>
					</div>
		  			<div class="posts-navigation col-12 d-flex flex-row justify-content-between pt-2">
						<?php previous_post_link('%link'); ?>
		      			<?php next_post_link('%link'); ?>
					</div>

				</div>

		</div>
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
