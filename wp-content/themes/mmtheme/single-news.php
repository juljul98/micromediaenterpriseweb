<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Micro Media Enterprise | News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Micromedia Enterprise">
    <meta name="keywords" content="Micromedia Enterprise">
    <meta name="author" content="Gil Buena">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/news.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<?php get_header(); ?>
<main>
   <section>
       <h2 class="pageHead"><div class="container"><span class="fade">News</span></div><div class="cov"></div></h2>
       <div class="newsS ">
           <div class="container">
               <div class="newsHold clr">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6 col-md-6">
                    <img class="img-responsive" src="<?php the_field('news_image'); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><?php the_title(); ?></h3>
                    <div class="newsF"><p><?php the_content(); ?></p></div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>  
                </div>   
           </div>
       </div>
   </section>
<p class="pageTop"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
</main>
<?php get_footer(); ?> 
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/main.js" type="text/javascript"></script>

</body>
</html>