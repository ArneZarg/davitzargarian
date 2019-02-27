<!--

This page is supposed to be a duplicate page for the French Speakers.
 



Chercher

 -->
<!DOCTYPE html>
<html>

<head>
<title>Davit Zargarian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head() ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="<?php echo esc_url(site_url('/fr/french-home-page'))?>">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b>Davit Zargarian</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url()) ?>">En Anglais</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('fr/recherche-dinterets')) ?>">Projets de recherche</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('/publications')) ?>">Publications</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('/fr/enseignement')) ?>">Enseignement</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" target="_blank" rel="noopener noreferer" href="http://www.rsc.org/journals-books-databases/about-journals/njc/editorial-board-members/#njc_zargarian">Travail éditorial</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('/fr/a-propos-de-moi')) ?>">À propos de moi</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('/fr/liens-interessants'))?>">Liens Interessants</a> </li>
          <li class="nav-item" style="font-weight: bold;"> <a class="nav-link" href="<?php echo esc_url(site_url('/search'))?>">Chercher<br></a> </li>
        </ul>
      </div>
    </div>
  </nav>
<?php $sliderPosts = new WP_Query(array('post_type' => 'fr_slider')); ?>
<div class="row">
    <div class="col-md-12">
      <div class="carousel slide" data-ride="carousel" id="carousel">
        <div class="carousel-inner">
          <?php while ($sliderPosts-> have_posts()){
            $sliderPosts->the_post(); ?>
          <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="<?php the_field('fr_image_1'); ?>" width="" style="" height="">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('fr_image_titre'); ?></h5>
              <p><?php the_field('fr_slider_caption_1'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/dautres-photos')) ?>">D'autres Photos</a>
            </div>
          </div>
          <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php the_field('fr_image_2'); ?>">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('fr_image_titre2'); ?></h5>
              <p><?php the_field('fr_slider_caption2'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/dautres-photos')) ?>">D'autres Photos</a>
            </div>
          </div>
          <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php the_field('fr_image3'); ?>">
            <div class="carousel-caption">
              <h5 class="m-0"><?php the_field('fr_image_titre3'); ?></h5>
              <p><?php the_field('fr_image_caption3'); ?></p><a class="btn btn-dark" href="<?php echo esc_url(site_url('/dautres-photos')) ?>">D'autres Photos</a>
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
        </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>
  </div>
  <!-- Custom Query to Display FrontPage Content -->
  <?php $frontPage = new WP_Query(array('post_type'=>'fr_frontPage'));?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <?php while($frontPage-> have_posts()){
                $frontPage->the_post();?>
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
                  <h1 class="mb-4">Contactez Moi</h1>
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