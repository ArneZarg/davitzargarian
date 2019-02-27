<?php get_header(); ?>
<?php $publicationPosts = new WP_Query(array(
  'post_type' => 'publication'
  ));
   ?>
<div class="py-2">
    <div class="container">
      <div class="row">
        <?php while($publicationPosts-> have_posts()) {echo $publicationPosts->the_post()?>
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
          <p class=""><?php the_content(); ?></p>
          <p><a href="<?php echo esc_url(site_url(''))?>">Back to Home</a></p>
          <p><a href="<?php echo esc_url(site_url('/publications'))?>">Back to Publications</a></p>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>