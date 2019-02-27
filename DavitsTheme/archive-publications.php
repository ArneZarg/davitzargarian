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
  <?php $publicationPosts = new WP_Query(array(
  	'paged' => get_query_var('paged', 1),
	'posts_per_page' => 10,
	'post_type' => 'publication'
	));
	 ?>
  <div class="py-2" style="">
    <div class="container">
      <div class="row">
      	<?php while ($publicationPosts-> have_posts()){
      		echo $publicationPosts->the_post();
      	?>
        <div class="col-md-12">
        	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <p class=""><?php echo wp_trim_words(get_the_content(), 10);?></p>
        </div>
        <hr>
        <?php } wp_reset_postdata(); ?>
        <ul>
        <?php echo paginate_links(array('total' => $publicationPosts->max_num_pages));?></ul>
      </div>
    </div>
  </div>
<?php get_footer(); ?>