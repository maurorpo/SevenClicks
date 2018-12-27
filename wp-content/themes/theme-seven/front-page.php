<?php get_header() ?>
<?php the_post() ?>
	<section id="home">
		<section id="main_slider" class="slier_ppal">
			<?php echo do_shortcode('[smartslider3 slider=2]') ?>
			<h1 class="title_main"><?php echo the_field('title_main') ?><br><small><?php echo the_field('subtitle_main') ?></small></h1>
			<div class="ico_down"><i class="fas fa-chevron-down"></i></div>
		</section>
		<section id="posts_home" class="all_post">
			<div class="container">
				<?php $espmes = new WP_Query( 'cat=8&showposts=999' ) ?>
				<?php while ($espmes -> have_posts()) : $espmes -> the_post() ?>
					<div class="item_cat">
						<a href="<?php the_guid() ?>">
              <img class="img-responsive" src="<?php echo the_field('img_home') ?>" alt="">
              <div class="content_hover">
                <h6 class="title"><?php echo the_title() ?><br><small><?php echo the_field('sub_cat') ?></small></h6>
              </div>
						</a>
					</div>
				<?php endwhile ?>
			</div>
		</section>
	</section>
<?php get_footer() ?>