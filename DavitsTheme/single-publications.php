<?php get_header(); ?>
<div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class=""><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class=""><?php the_content(); }?></p>
          <p><a href="<?php echo esc_url(site_url(''))?>">Back to Home</a></p>
          <p><a href="<?php echo esc_url(site_url('/publications'))?>">Back to Publications</a></p>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>