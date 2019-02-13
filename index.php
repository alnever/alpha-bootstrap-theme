<?php get_header(); ?>

	<!-- site header -->
	<div class="header">
		<div class="header-text-block">
			<div class="header-title">
				<?php bloginfo('name'); ?>
			</div>
			<div class="header-text">
				<?php bloginfo('description'); ?>
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
				<!-- sticky post -->
				<?php
					$sticky = get_option('stiky_posts');
					$args = [
						'posts_per_page' => 1,
						'post__in' => $stiky,
						'ignore_stiky_posts' => 1,
					];
					$query = new WP_Query($args);
					while ( $query->have_posts() ): $query->the_post();
				?>
					<div class="row p-2 m-0 mb-2 border border-info rounded bg-light">
						<!-- stiky post featured image -->
						<?php if (has_post_thumbnail()): ?>
							<div class="col-6 p-2">
								<img src="<?php the_post_thumbnail_url(); ?>" />
							</div>
						<?php endif; ?>

						<!-- stiky post creditials -->
						<div class="<?php _e(has_post_thumbnail() ? 'col-6' : 'col-12') ?>">
							<h2 class="text-secondary"><?php the_title() ?></h2>
							<div class="">
								<span><?php the_date(); ?></span>
								<span><?php the_author_link(); ?></span>
							</div>
							<p><?php the_excerpt(); ?></p>
							<p><?php the_category(); ?></p>
							<div class="d-flex flex-row justify-content-end">
								<a href="<?php the_permalink(); ?>" class="btn btn-secondary">
									<?php _e('More...', 'alpha'); ?>
								</a>
							</div>
						</div>
					</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
				<!-- main post - list -->
				<?php if (have_posts()):  ?>
					<div class="row m-0">
						<?php while(have_posts()): the_post(); ?>
							<div class="col-6 pb-2">
								<?php if (has_post_thumbnail()): ?>
									<img src="<?php the_post_thumbnail_url(); ?>" />
								<?php endif; ?>
								<h3 class="text-primary"><?php the_title(); ?></h3>
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
			<!-- end of posts area -->


			<!-- sidebar -->
			<div class="col-3">
				<?php
					dynamic_sidebar('right_sidebar');
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
