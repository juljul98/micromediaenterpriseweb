<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Micro Media Enterprise | Expertise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Micromedia Enterprise">
    <meta name="keywords" content="Micromedia Enterprise, Micromedia Expertise,">
    <meta name="author" content="Gil Buena">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/expertise.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/font-awesome-4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/excerpt.js"></script>
</head>
<body>
 <?php get_header(); ?>
<main>
    <section class="expArea">
    <h2 class="pageHead"><div class="container"><span class="fade">Expertise</span></div><div class="cov"></div></h2>
    <ul class="container exp" id="expertise">
       <?php
        $args = array('post_type' => 'expertise');
        $custom_query = new Wp_query($args);
        while( $custom_query->have_posts()):$custom_query->the_post(); 
        ?>
        <li class="expCont row">
            <div class="expImg col-md-4 col-sm-4"><img class="img-responsive" src="<?php the_field('expertise_image'); ?>" alt="<?php the_title(); ?>"></div>
            <div class="col-md-8 col-sm-8">
                <h3><?php the_title(); ?></h3>
                <div class="expDesc excerpt"><p><?php the_content(); ?></p></div> 
            </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</section>
<p class="pageTop"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/expertise.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
 <script>
        $(document).ready(function(){
           $('.navItem li:nth-child(3) a').addClass('active'); 
        });
</script>
</body>
</html>