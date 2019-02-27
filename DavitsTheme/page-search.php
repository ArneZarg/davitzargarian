<?php get_header();?>
<?php
while (have_posts()){
	the_post() ?>
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
        <?php } ?>
      </div>
    </div>
  </div>
<?php get_footer();?>