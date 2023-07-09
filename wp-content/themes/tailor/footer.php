 <!-- Footer Start -->
        <footer>
            <div class="main-footer">
                <div class="container theme-container">
                    <div class="footer-top ">
                       <?php 
                        if ( has_custom_logo( ) ) {  the_custom_logo(); } 
                        if(display_header_text()) { ?>
                              <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">  <h2><?php bloginfo( 'name' ); ?> </h2></a>
                        <?php }
                            $facebook_check = get_theme_mod('facebook_setting');
            				$twitter_check = get_theme_mod( 'twitter_setting' );
            				$rss_check = get_theme_mod( 'rss_setting' );
            				$pinterest_check = get_theme_mod( 'pinterest_setting' );
            				$youtube_check = get_theme_mod( 'youtube_setting' );
        				if(!empty($facebook_check) || !empty($twitter_check) || !empty($rss_check) || !empty($pinterest_check) || !empty($youtube_check)) { ?>
                        <div class="social">
                            <ul>
                                <?php if(!empty($facebook_check)) { ?>
        							<li > <a href="<?php echo esc_url($facebook_check); ?>" class="facebook" > <i class="fa fa-facebook"></i> </a> </li>
        						<?php } ?>
        						<?php if(!empty($twitter_check)) { ?>
        							<li> <a href="<?php echo esc_url($twitter_check); ?>" class="twitter"> <i class="fa fa-twitter"></i> </a> </li>
        						<?php } ?>
        						 <?php if(!empty($youtube_check)) { ?>
        							<li> <a href="<?php esc_url($youtube_check); ?>" class="youtube">  <i class="fa fa-youtube"></i> </a> </li>
        						<?php } ?>
        						<?php if(!empty($rss_check)) { ?>
        							<li> <a href="<?php echo esc_url($rss_check); ?>" class="rss"> <i class="fa fa-rss"></i> </a> </li>
        						<?php } ?>
        						<?php if(!empty($pinterest_check)) { ?>
        							<li> <a href="<?php echo  esc_url($pinterest_check); ?>" class="pinterest"> <i class="fa fa-pinterest"></i> </a> </li>
        						<?php } ?>
                            </ul>
                        </div>
        				<?php }
                        $footer_check = get_theme_mod( 'tailor_footerdesc' );
        				if( $footer_check != '' ) { ?>
                        <p><?php echo esc_html( get_theme_mod('tailor_footerdesc', '') );  ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="space-logo">
                <div class="footer-bottom">
                    <div class="container theme-container ">
                        <p><span>                           
                            <?php esc_html_e('Powered By ','tailor'); ?>
                            <a href="<?php echo esc_url('https://fasterthemes.com/wordpress-themes/tailor'); ?>" target="_blank"><?php esc_html_e(' Tailor WordPress Theme','tailor'); ?></a>
                        </span></p>          
                      <?php $copyright_check = get_theme_mod( 'copyright_url_setting' );
        				if( $copyright_check != '' ) { ?>
        					<p><span><?php echo esc_html( get_theme_mod('copyright_url_setting', '') ); ?></span></p>
        			 <?php } ?>
                    </div>
                </div>
               </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>