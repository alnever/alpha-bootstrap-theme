<?php get_header(); ?>

	<!-- site header -->
	<div class="container p-0">
		<div class="jumbotron">
			<h1 class="display-4">
				<?php bloginfo('name'); ?>
			</h1>
			<p class="lead">
				<?php bloginfo('description'); ?>
			</p>
		</div>
	</div>

	<!-- site body -->
	<div class="container p-0">
		<?php if (have_posts()):  ?>
			<div class="row m-0">
				<?php while(have_posts()): the_post(); ?>
					<div class="col-4 pb-2">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url(); ?>" />
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<div class="">
								<span><?php the_date(); ?></span>
								<span><?php the_author_link(); ?></span>
						</div>

						<p><?php the_excerpt(); ?></p>
						<p><?php the_category(); ?></p>
						<div class="d-flex flex-row justify-content-end">
							<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">
								<?php _e('More...', 'alpha'); ?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="d-flex flex-row justify-content-center pt-2">
				<ul class="pagination">
					<?php _e(paginate_links()); ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
