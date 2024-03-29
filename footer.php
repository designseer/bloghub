<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloghub
 */

?>

	<!--Foooter-->
<footer id="bottom-footer">
  <div class="container-fluid">
    <div class="row animated fadeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <p class="copyright">© 2018 <a href="#">BlogHub</a>. All rights reserved</p>
        <!--/copyright--> 
      </div>
      <!--bottom nav-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-nav">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </nav>
      </div>
      <!--/bottom nav--> 
      
      <!--Social Links-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
        <?php
          if ( $socials = get_theme_mod( 'bloghub_social_links' ) ) 
          {
            $socials = $socials ? array_filter( $socials ) : array();
            foreach ( $socials as $social => $name ) 
            {
            printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li>', esc_url( $name ), esc_html($social) );
            }
          }?>
        </ul>
      </div>
      <!--/Social Links--> 
      
    </div>
  </div>
</footer>


<!-- /AOS --> 



<?php wp_footer(); ?>
</body>
</html>
