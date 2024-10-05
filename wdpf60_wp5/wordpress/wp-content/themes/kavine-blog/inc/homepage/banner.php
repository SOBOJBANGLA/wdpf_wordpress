<?php

    // Get default  mods value.
    $default = kavine_blog_get_default_mods();

    /// Get default  mods value.
    $banner_section_enable = get_theme_mod( 'kavine_blog_banner_section_enable', true );

    if ( false == $banner_section_enable ) {
        return;
    }
    $excerpt_length = get_theme_mod( 'kavine_blog_banner_secion_excerpt',20);
    $banner = get_theme_mod( 'kavine_blog_banner_content_type');
    $top_img_url = get_theme_mod( 'kavine_blog_banner_top_image' );
    $bottom_img_url = get_theme_mod( 'kavine_blog_banner_bottom_image' );
    $enable_category = get_theme_mod( 'kavine_blog_banner_category_enable', true );
    $enable_content = get_theme_mod( 'kavine_blog_banner_content_enable', true );
    $enable_social = get_theme_mod( 'kavine_blog_banner_social_icons_enable', true );
    $btn_text = get_theme_mod( 'kavine_blog_banner_btn_text');

    // Query if the content type is either post or page.

    $banner_section_id = get_theme_mod( 'kavine_blog_banner_post',10 );

    $query = new WP_Query( array( 'post_type' => $banner, 'p' => absint( $banner_section_id ) ) );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post(); ?>
                <div id="banner" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                    <div class="shadow-section-content">  
                        <div class="shadow-entry-container">
                            <?php if ($enable_category==true): ?>
                                <div class="shadow-entry-meta">
                                    <?php   kavine_blog_cats(); ?>
                                </div>
                            <?php endif ?>
                            
                            <header class="shadow-entry-header">
                                <h2 class="shadow-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </header>
                            <?php if ($enable_content==true): ?>
                                <div class="shadow-entry-content">
                                    <?php
                                        $excerpt = kavine_the_excerpt( $excerpt_length );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div>
                            <?php endif ?>
                        </div><!-- .shadow-entry-content --> 
                        <?php if (!empty($btn_text)) {?>
                            <div class="read-more">
                                <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($btn_text);?></a>
                            </div><!-- .read-more -->
                        <?php } ?>                      
                    </div><!-- .shadow-section-content -->
                    <?php if ($enable_social==true): ?>
                        <div class="banner-social">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'bannersocial',
                                    'container'     => 'div',
                                    'container_class' => 'social-menu',
                                    'menu_class'     => 'social-icons',
                                    'fallback_cb'   => false,
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>' . kavine_blog_get_icon_svg( 'link' ),
                                    'depth'          => 1,
                                ) ); 
                            ?>
                        </div><!-- .banner-social -->
                    <?php endif ?>
                </div>
                <?php   
            } 
        }
        wp_reset_postdata();