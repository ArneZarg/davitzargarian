<?php get_header(); 
while(have_posts()){
  the_post()
?>
<div class="py-5">
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
          <p><?php pll_the_languages(); ?></p>
          <p class=""><?php the_content(); }?></p>
          <p><a href="<?php echo esc_url(site_url(''))?>">Back to Home</a></p>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer()?>