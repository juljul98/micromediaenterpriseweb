<!-- header -->
<header>
    <nav class="navbar">
      <div class="pattern"></div>
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <i class="fa fa-bars"></i>
          </button>
          <h1 class="menuLogo">
              <a class="navbar-brand" href="#">M</a>
          </h1>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navItem clr">
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); ?>"><div class="navHover"></div><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'products' ) ) ); ?>"><div class="navHover"></div><i class="fa fa-star"></i><span> Products</span></a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'expertise' ) ) ); ?>"><div class="navHover"></div><i class="fa fa-cogs"></i><span>Expertise</span></a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>"><div class="navHover"></div><i class="fa fa-users"></i><span>About Us</span></a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ); ?>"><div class="navHover"></div><i class="fa fa-phone"></i><span>Contact</span></a></li>
        </ul>
        </div>
      </div>
    </nav>
</header><!-- /.header -->