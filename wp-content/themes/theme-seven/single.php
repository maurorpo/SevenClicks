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
					<div class="col-5 col-md-5">
						<h1 class="title_category"><?php the_title() ?></h1>
            <article class="content_post"><?php the_content() ?></article>
            <div class="urlweb"><a href="<?php echo the_field('link_web') ?>"><?php echo the_field('link_web') ?></a></div>
          </div>
          <div class="col-7 col-md-7">
            <div class="owl-carousel owl-theme">
              <div class="item"><h4>1</h4></div>
              <div class="item"><h4>2</h4></div>
              <div class="item"><h4>3</h4></div>
              <div class="item"><h4>4</h4></div>
              <div class="item"><h4>5</h4></div>
              <div class="item"><h4>6</h4></div>
              <div class="item"><h4>7</h4></div>
              <div class="item"><h4>8</h4></div>
              <div class="item"><h4>9</h4></div>
              <div class="item"><h4>10</h4></div>
              <div class="item"><h4>11</h4></div>
              <div class="item"><h4>12</h4></div>
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