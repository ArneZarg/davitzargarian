<?php get_header(); ?>
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<h1>Search/Cherche</h1>
          <form class="form-inline" role="search" action="<?php echo esc_url(site_url('/')) ?>">
            <div class="input-group">
              <input name="s" method="get" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
              <div class="input-group-append"><button value="Search" class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
	<div class="py-2" style="">
    <div class="container">
      <div class="row">
      	<?php while(have_posts()){
	the_post() ?>
        <div class="col-md-12">
        	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <p class=""><?php echo wp_trim_words(get_the_content(), 10);?></p>
        </div>
        <?php } ?>
        <hr>
        <ul>
        <?php echo paginate_links(); ?></ul>
      </div>
    </div>
  </div>
<?php get_footer(); ?>