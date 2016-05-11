<!DOCTYPE html>
<html lang="en">
<head>
    <title>Micro Media Enterprise | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Micromedia Enterprise">
    <meta name="keywords" content="Micromedia Enterprise">
    <meta name="author" content="Gil Buena">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/slick/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/font-awesome-4.5.0/css/font-awesome.min.css">
    <script src="<?php echo get_template_directory_uri();?>/resources/jquery/jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri();?>/resources/slick/slick.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/resources/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/excerpt.js" type="text/javascript"></script>
</head>
<body>
  <?php get_header(); ?>
   <!-- main Section/Content -->
   <main>
      <!-- bannerSection -->
       <section class="imageSlider">
          <ul class="slider">
              <li> 
                  <div class="bannerTitle">
                      <h2>Business Solutions</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem eligendi ipsum, iure, iusto amet cum nobis laborum eum totam natus necessitatibus illum laboriosam adipisci! Eum alias, laborum deleniti aut! Quidem!</p>
                  </div>
                  <img class="sliderImg" src="<?php echo get_template_directory_uri();?>/images/safe_image%20(1).jpg" alt="Micromedia Enterprise">
              </li>
              <li>
                 <div class="bannerTitle">
                      <h2>Technology</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem eligendi ipsum, iure, iusto amet cum nobis laborum eum totam natus necessitatibus illum laboriosam adipisci! Eum alias, laborum deleniti aut! Quidem!</p>
                  </div>
                  <img class="sliderImg" src="<?php echo get_template_directory_uri();?>/images/safe_image.jpg" alt="Micromedia Enterprise">
              </li>
          </ul>
           <div class="controllers">
                <div class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></div>
                <div class="next"><a href="#"><i class="fa fa-angle-right"></i></a></div>
            </div>
       </section><!--./bannerSection-->
       <!-- welcome to company -->
       <section class="welcome">
           <h2 class="secHead">Welcome to <span>MicroMedia Enterprise</span></h2>
           <p class="s2Blk01">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus perspiciatis autem laboriosam tempora cum rem voluptatum incidunt! Quia perspiciatis, deleniti animi cupiditate, laborum aspernatur! Cum excepturi eaque explicabo voluptas ipsa.</p>
           <div class="container sec01Holder">
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-cogs"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-cubes"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-line-chart"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-calendar"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-pie-chart"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
               <div class="infoCont col-md-4 col-sm-4">
                   <div class="sec01Logo"><i class="fa fa-rocket"></i></div>
                   <h3 class="sec01Title">Engineering</h3>
                   <p class="sec01Cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem veritatis magni nisi, neque nihil</p>
               </div>
           </div>
       </section><!-- welcomeSection -->
       <!-- Items section -->
       <section class="secItems">
         <div class="container">
          <h2 class="secHead">New <span>Products</span></h2>
          <p class="prodTxtBlk">Lorem ipsum dolor consequuntur porro labore distinctio ullam dolor, dolorum consequatur. Esse suscipit ad ex mollitia provident, aut.</p>
           <ul class="horizSlider">
              <?php $args = array ('post_type' => 'products' ,'tag'=>'new');
               $custom_query = new Wp_query( $args );
               while ( $custom_query->have_posts()):$custom_query->the_post(); ?>
               <li class="prodItems col-md-3 col-sm-4">
                   <p <?php echo has_tag('new') ? body_class('new') : body_class();?>></p>
                   <div class="prodItemImg"><img class="img-responsive" src="<?php the_field('products_image'); ?>" alt="<?php the_title(); ?>"></div>
                   <div class="prodItemName"><?php the_title(); ?></div>
                   <div class="prodHovEff"><a href="<?php the_permalink(); ?>"><i class="fa fa-search"></i><span>SEE ME</span></a></div>
               </li>
               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
            </ul>
           <p class="btnView"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'products' ) ) ); ?>">VIEW ALL PRODUCTS</a></p>
        </div>
       </section><!--./itemsSection -->
       <!-- choose us Section -->
       <section class="chooseUs">
          <div class="cover">
              <div class="container">
                <h2 class="secHeadb">why you <span>Choose</span> us?</h2>
                <div class="row">
                    <p class="wcuCont col-md-8 col-sm-8">Lorem ipsum dolor sit amet, <span>Julius</span> consectetur adipisicing elit. Nemo veniam dolorem consequatur voluptatum corporis eum totam, rem, in earum veritatis debitis, qui tenetur saepe velit eligendi, accusamus aliquam cumque ab.</p>
                    <p class="btnContct col-md-4 col-sm-4"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ); ?>">Contact Us</a></p>    
                </div>
              </div>
          </div>
       </section><!--./choose us section -->
       <!-- newsArea -->
       <section class="newsArea">
           <h2 class="secHead cent">Our <span>News</span></h2>
           <p class="newsTxtBlk cent">essitatibus quam nihil possimus. Et dolorum obcaecati quam, eos alias iste, perspiciatis iusto dolor fugit.</p>
           <ul class="container">
              <?php $args = array ('post_type' => 'news');
               $custom_query = new Wp_query( $args );
               while ( $custom_query->have_posts()):$custom_query->the_post(); ?>
              <li class="newsBlk col-md-4 col-sm-4">
                 <div class="newsCont">
                      <div class="newsImg"><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('news_image'); ?>" alt="<?php the_title(); ?>"></a></div>
                      <h3 class="newsName"><?php the_title(); ?></h3>
                      <div class="excerpt newsDesc"><p><?php the_content(); ?></p></div>
                 </div>
               </li>
              <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
           </ul>
       </section>
       <!--./ newsArea -->
       <p class="pageTop"><a href="#"><i class="fa fa-angle-double-up"></i></a></p>
   </main><!--./ main section content -->
<?php get_footer(); ?>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/slick.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
           $('.navItem li a:first').addClass('active'); 
        });
        
    </script>
</body>
</html>