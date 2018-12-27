<?php get_header() ?>
<?php the_post() ?>
	<section id="main">
		<section id="blog" class="blog_list">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<h1 class="title_section">Blog</h1>
						<?php $espmes = new WP_Query( 'cat=7&showposts=99' ) ?>
						<ul class="listposts_sidebar list_block">
	            <?php while ($espmes -> have_posts()) : $espmes -> the_post() ?>
                <li class="item_post">
                  <a class="title_pots" href="<?php the_guid() ?>"><?php the_title() ?></a>
                  <div class="date"><?php the_date() ?></div>  
                </li>
	            <?php endwhile  ?>
						</ul>
					</div>
					<div class="col-lg-9 col-md-9">
						<ul class="list_postscomplete list_block">
							<?php $espmes = new WP_Query( 'cat=7&showposts=99' ) ?>
	            <?php while ($espmes -> have_posts()) : $espmes -> the_post() ?>
	              <li class="item_post">
	              	<div class="row">
	              		<div class="col-lg-4 col-md-4">
	              			<div class="img_post">
	              				<a href="<?php the_guid() ?>">
	              					<img class="img-responsive" src="<?php the_field('img_blog') ?>" alt="<?php the_title() ?>">
	              				</a>
	              			</div>
	              		</div>
	              		<div class="col-lg-8 col-md-8">
											<div class="dats">
												<h4 class="title_pots"><?php the_title() ?><span class="date"><?php the_date() ?></span><br><small class="subtitle_post"><?php the_field('subtitle_blog') ?></small></h4>
												<article class="content_post"><?php the_content() ?></article>
												<a href="<?php the_guid() ?>" class="btn_more">Ver más</a>
											</div>
	              		</div>
	              	</div>
	              </li>
	            <?php endwhile  ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php get_footer() ?>