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
					<div class="col-12 pb-2 pt-2 border border-info rounded">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url(); ?>" />
						<?php endif; ?>
						<h1><?php the_title(); ?></h1>
						<div class="">
								<span><?php the_date(); ?></span>
								<span><?php the_author_link(); ?></span>
						</div>
            <hr>
						<p><?php the_content(); ?></p>
            <hr>
						<p><?php the_category(); ?></p>
						<p><?php the_tags(); ?></p>
					</div>
					<div class="posts-navigation col-12 d-flex flex-row justify-content-between pt-2">
						<?php previous_post_link('%link'); ?>
						<?php next_post_link('%link'); ?>
    			</div>
				<?php endwhile; ?>
			</div>

		<?php endif; ?>
	</div>

<?php get_footer(); ?>
