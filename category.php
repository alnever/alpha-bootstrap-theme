<?php get_header(); ?>

	<!-- site header -->
	<div class="header-50" style="background-image: url(<?php header_image(); ?>)">
		<div class="header-text-block">
			<div class="header-title">
				<?php bloginfo('name'); ?>
			</div>
			<div class="header-text">
				<?php single_cat_title(); ?>
			</div>
		</div>
	</div>

	<!-- header widgets-->
	<div class="container p-0">
		<?php
			dynamic_sidebar('header_widgets');
		?>
	</div>


	<!-- site body -->
	<div class="container p-0 mb-2">
		<div class="row">
			<!-- posts -->
			<div class="col-9">
				<?php if (have_posts()):  ?>
					<div class="row m-0">
						<?php while(have_posts()): the_post(); ?>
							<div class="col-6 pb-2">
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
									<a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">
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
			<!-- sidebar -->
			<div class="col-3">
				<?php
					dynamic_sidebar('right_sidebar');
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
