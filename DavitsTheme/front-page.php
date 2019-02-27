<?php get_header();?>
<?php $sliderPosts = new WP_Query(array('post_type' => 'slider')); ?>
<div class="row">
    <div class="col-md-12">
      <div class="carousel slide" data-ride="carousel" id="carousel">
        <div class="carousel-inner">
          <?php while ($sliderPosts-> have_posts()){
            $sliderPosts->the_post(); ?>
          <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="<?php the_field('slider_image_1'); ?>" width="" style="overflow-y: hidden" height="700px">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('image_title_1'); ?></h5>
              <p><?php the_field('slider_caption_1'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/other-photos')) ?>">More Photos</a>
            </div>
          </div>
          <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php the_field('slider_image_2'); ?>" style="overflow-y: hidden" height="700px">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('image_title_2'); ?></h5>
              <p><?php the_field('slider_caption_2'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/other-photos')) ?>">More Photos</a>
            </div>
          </div>
          <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php the_field('slider_image_3'); ?>">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('image_title_3'); ?></h5>
              <p><?php the_field('slider_caption_3'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/other-photos')) ?>">More Photos</a>
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
        </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>
  </div>
  <!-- Custom Query to Display FrontPage Content -->
  <?php $frontPage = new WP_Query(array('post_type'=>'frontPage'));?>
  <?php while($frontPage-> have_posts()){
                $frontPage->the_post();?>
  <div class="py-5" style="	background-image: url(<?php echo the_field('background-image'); ?>);	background-position: right bottom;	background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              
              <p class=""><?php the_content(); ?></p>
            <?php } wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <div class="bg-white ml-auto col-md-6 border p-2 bg-dark">
          <div class="row">
            <div class="col-md-12">
              <div class="row" style="">
                <div class="mx-auto p-4 col-md-7">
                  <h1 class="mb-4">Contact Me</h1>
                  <form>
                    <?php echo do_shortcode('[contact-form-7 id="110" title="Contact form 1"]'); ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>