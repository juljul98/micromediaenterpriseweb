<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Micro Media Enterprise | Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Micromedia Enterprise">
    <meta name="keywords" content="Micromedia Enterprise">
    <meta name="author" content="Gil Buena">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/products.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function(){
        $('.navItem li:nth-child(2) a').addClass('active');
        $('.fade').animate({
          opacity: 1
        }, 500);
      });
    </script>
</head>
<body>
<?php get_header(); ?>
<main>
<section class="secItems">
<h2 class="pageHead"><div class="container"><span class="fade">Products</span></div><div class="cov"></div></h2>
 <div class="container prod clr">
   <?php get_search_form(); ?>
   <ul class="productArea clr" id="products">
      <?php $args = array ('post_type' => 'products');
       $custom_query = new Wp_query( $args );
       while ( $custom_query->have_posts()):$custom_query->the_post(); ?>
       <li class="prodItems col-md-2">
            <p <?php echo has_tag('new') ? body_class('new') : body_class();?>></p>
           <div class="prodItemImg"><img class="img-responsive" src="<?php the_field('products_image'); ?>" alt="Micro Media New Products"></div>
           <div class="prodItemName"><?php the_title(); ?></div>
           <div class="prodHovEff"><a href="<?php the_permalink(); ?>"><i class="fa fa-search"></i><span>SEE ME</span></a></div>
       </li>
       <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
</div>
</section><!--./itemsSection -->
<p class="pageTop"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js" type="text/javascript"></script>
</body>
</html>