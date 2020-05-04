<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">   
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="sticky">
            <section class="secondary-menu" style="background-color: #97c3d4 !important; padding: 5px!important;">
                <div class="container">
                        <?php
                            $secondary_nav_args = array(
                                'menu'           => 'secondary',
                                'theme_location' => 'secondary',
                                'menu_id'        => 'secondary-menu',
                                'menu_class'     => 'AllyU-secondary-menu navbar-right',
                                'items_wrap'      => '%3$s',
                                'depth'           => 0,
                                'fallback_cb'    => false,
                                'echo'           => false,
                                'container'      => false
                            );

                            echo strip_tags($secondary_menu = wp_nav_menu($secondary_nav_args), '<a>');
                        ?>
                </div>
            </section>
            
            <div class="container">
                <nav class="navbar">
                    <div class="logo">
                        <a id="site-brand" class="active" href="<?php echo esc_url( home_url() ); ?>">
                            <?php $logo_fallback = get_template_directory_uri() . '/logo.svg'; ?>
                            <?php $logo_url = get_theme_mod( 'thrive_logo', esc_url( $logo_fallback ) ); ?>
                            <img  class="site-logo" src="<?php echo esc_url( $logo_url ); ?>" 
                            alt="<?php bloginfo( 'title' ); ?>" />
                        </a>
                    </div>
                
                    <div class="sitenavigation">
                        <span class="menu-icon">
                            <a href="#" class="menu example5"><span></span></a>
                                <div id="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                        </span>

                        <ul>
                            
                            <li>
                                <a href="#"><img class="search-icon" src="<?php echo $src = get_theme_file_uri('img/glass.png'); ?>" />Search</a>
                            </li>
                                
                            <?php
                                $primary_nav_args = array(
                                    'menu'           => 'AllyU-Menu',
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'     => 'AllyU-menu',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 3,
                                    'fallback_cb'    => 'false',
                                    'echo'           => 'false',
                                    'container'      => false
                                );

                                echo strip_tags($primary_menu = wp_nav_menu($primary_nav_args), '<a>');
                            ?>


                            <?php if ( !is_user_logged_in() ) { ?>
                                <!--Makes the Register Account button appear for users who aren't logged in or aren't in their account-->
                                    <li>
                                        <b><a id="header-sign-in" href="<?php echo esc_url( wp_login_url() ); ?>" class="login-btn"><?php esc_html_e('Login', 'thrive-nouveau'); ?></a></b>
                                    </li>
                                <?php if ( get_option('users_can_register') ) {?>
                                    <li>
                                        <b><a id="header-sign-up" href="<?php echo esc_url( wp_registration_url() ); ?>" class="register-btn"><?php esc_html_e('Register', 'thrive-nouveau'); ?></a></b>
                                    </li>

                                <?php } ?>
                                
                            <?php } else { ?>
                                <!--If the user is logged in user nav -->        
                                <?php echo strip_tags(thrive_user_nav(), '<a>'); ?>
                                
                            <?php } ?>

                        </ul>
                    </div><!--sitenavigation-->
                </nav><!--navbar-->
            </div>
        </header>