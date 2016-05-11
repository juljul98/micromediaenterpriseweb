<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Micro Media Enterprise | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Micromedia Enterprise">
    <meta name="keywords" content="Micromedia Enterprise, Micromedia Expertise, Micromedia About">
    <meta name="author" content="Gil Buena">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/contact.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/font-awesome-4.5.0/css/font-awesome.min.css">
    <script src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri();?>/js/excerpt.js" type="text/javascript"></script>
</head>
<body>
<?php get_header(); ?>
<main>
<section>
    <h2 class="pageHead"><div class="container"><span class="fade">Contact Us</span></div><div class="cov"></div></h2>
</section>
<section class="contactArea">
    <div class="container">
       <h2 class="secHead cent">Leave us a <span>Message</span></h2>
       <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact"]' ); ?> 
    </div>
</section>
<section>
    <h2 class="secHead cent">Find us on <span>Map</span></h2>
    <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
</section>
<p class="pageTop"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
<script>
     $(window).load(function(){
           $('.navItem li:nth-child(6) a').addClass('active'); 
        });
</script>
</body>
</html>