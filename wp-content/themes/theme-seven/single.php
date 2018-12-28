<?php get_header(); ?>
<?php the_post() ?>
	<section class="int_category" <?php post_class('cf') ?> id="post-<?php the_ID() ?>">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<article>
			<div class="container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-4 col-md-4">
						<h1 class="title_category"><?php the_title() ?></h1>
            <article class="content_post"><?php the_content() ?></article>
            <div class="urlweb"><a href="<?php echo the_field('link_web') ?>"><?php echo the_field('link_web') ?></a></div>
          </div>
          <div class="col-8 col-md-8">
            <?php $galery = get_field('imgs_galery') ?>
            <div class="owl-carousel owl-theme">
              <?php foreach ($galery as $img) : ?>
                <?php $img_slider = $img['img_galery'] ?>
                <div class="item">
                  <img src="<?php echo $img_slider ?>" alt="">
                </div>
              <?php endforeach ?>
            </div>
          </div>
				<?php endwhile; endif; ?>
			</div>
		</article>
  </section>
  <script>
    jQuery('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      nav:true,
    });
  </script>
<?php get_footer() ?>