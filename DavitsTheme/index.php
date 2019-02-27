<?php get_header();?>
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Publications</h1>
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
<div class="py-2">
    <div class="container">
      <div class="row">
      	<?php 
while ($publicationPosts-> have_posts()){
      		echo $publicationPosts->the_post();
?>
        <div class="col-md-12">
          <h2 class=""><?php the_title(); ?></h2>
          <p class=""><?php the_content(); ?></p>          
        </div>
<?php } wp_reset_postdata(); ?>
      </div>
		<p><a href="<?php echo esc_url(site_url(''))?>">Back to Home</a></p>
		<p><a href="<?php echo esc_url(site_url('/publications'))?>">Back to Publications</a></p>
		<ul>
	        <?php echo paginate_links(array('total' => $publicationPosts->max_num_pages));?>
	    </ul>
	</div>
</div>

<?php get_footer(); ?>