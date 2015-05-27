<?php get_header(); ?>
	<div id="main" class="container">
		<div id="posts" >

			<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post();
			?>

			<div class="post">
				<div class="post-header">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-meta">
						<?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
					</div>
					<div class="post-content">
						<div class="post-image">
							<img src="images.jpg" height="168" width="300">
						</div>
						<div class="post-body">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
			</div><!-- post -->

			<?php
				endwhile;
			else:
			?>

			<p>記事はありません！</p>

			<?php
				endif;
			?>

			<div class="navigation">
				<div class="prev">perv</div>
				<div class="next">next</div>
			</div>
		</div>
	<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
