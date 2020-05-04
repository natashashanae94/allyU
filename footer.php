<footer>
    <?php wp_footer (); ?>   
        <div class="container">
            <div class="row">

                <div class="footer-logo col-xs-12 col-md-3">
                    
                    <a id="footer-site-brand" href="<?php echo esc_url( home_url() ); ?>">
                        <?php $logo_fallback = get_template_directory_uri() . '/logo.svg'; ?>
                        <?php $logo_url = get_theme_mod( 'thrive_logo', esc_url( $logo_fallback ) ); ?>
                        <img  class="site-logo" src="<?php echo esc_url( $logo_url ); ?>" 
                        alt="<?php bloginfo( 'title' ); ?>" />
                    </a>

                </div>

                <div class="sitemap col-xs-12 col-md-3">
                    <h3>ALLYU SERVICES</h3>
                    <?php
                        $footer_menu_args = array(
                            'menu'           => 'SiteMap',
                            'theme_location' => 'Footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'navbar-left',
                            'fallback_cb'    => 'false',
                            'echo'           => 'false',
                            'container'      => false
                        );

                        $footer_menu = wp_nav_menu($footer_menu_args);
                    ?>
                </div>

                <div class="sitemap2 col-xs-12 col-md-3">
                    <h3>ALLYU SERVICES</h3>
                    <?php
                        $footer_menu_args = array(
                            'menu'           => 'SiteMap2',
                            'theme_location' => 'Footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'navbar-left',
                            'fallback_cb'    => 'false',
                            'echo'           => 'false',
                            'container'      => false
                        );

                        $footer_menu = wp_nav_menu($footer_menu_args);
                    ?>
                </div>

                <div class="sitemap3 col-xs-12 col-md-3">
                        <h3>HELP INFO</h3>
                    <?php
                        $footer_menu_args = array(
                            'menu'           => 'SiteMap3',
                            'theme_location' => 'Footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'navbar-left',
                            'fallback_cb'    => 'false',
                            'echo'           => 'false',
                            'container'      => false
                        );

                        $footer_menu = wp_nav_menu($footer_menu_args);
                    ?>
    
                </div>
            </div>
        </div>
</footer>
    
<div class="ownership">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6>AllyU 2020. All Rights Reserved. | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></h6>
            </div>
        </div>
    </div>
</div>
