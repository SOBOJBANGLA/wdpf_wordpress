<?php

    // Get default  mods value.
    $default = kavine_blog_get_default_mods();

    /// Get default  mods value.
    $author_section_enable = get_theme_mod( 'kavine_blog_author_section_enable', true );

    if ( false == $author_section_enable ) {
        return;
    }
    $excerpt_length = get_theme_mod( 'kavine_blog_author_secion_excerpt',20);
    $author_message = get_theme_mod( 'kavine_blog_author_content_type');
    $signature_img_url = get_theme_mod( 'kavine_blog_author_signature_image');
    $signature_text = get_theme_mod( 'kavine_blog_author_signature_text');
    $author_subtitle = get_theme_mod( 'kavine_blog_author_subtitle');
    $top_img_url = get_theme_mod( 'kavine_blog_author_top_image');
    $bottom_img_url = get_theme_mod( 'kavine_blog_author_bottom_image');
    $side_image_layout = get_theme_mod( 'kavine_blog_author_side_image_layout', 'moving' );
    $btn_text = get_theme_mod( 'kavine_blog_author_btn_text');
    $section_icon = get_theme_mod( 'kavine_blog_author_icon');
    $section_bg_image = get_theme_mod( 'kavine_blog_author_background_image');
    $author_section_id = get_theme_mod( 'kavine_blog_author_post',10 );
    $query = new WP_Query( array( 'post_type' => $author_message, 'p' => absint( $author_section_id ) ) );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post(); ?>
                <div id="message" class="page-section relative <?php if (!empty($section_bg_image)){ ?>bg-image<?php } ?>" <?php if (!empty($section_bg_image)){ ?> style="background-image: url('<?php echo esc_url($section_bg_image); ?>');" <?php } ?>>
                    <?php if (!empty($section_bg_image)): ?>
                        <div class="bg-overlay"></div>
                        <div class="bg-overlay-two"></div>
                    <?php endif ?>
                    <div class="wrapper">
                        <div class="shadow-section-content"> 
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="featured-image">
                                    <img class="top-author-image" src="<?php echo esc_url($top_img_url); ?>">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>">
                                    <img class="bottom-author-image" src="<?php echo esc_url($bottom_img_url); ?>">
                                </div><!-- .author-thumbnail -->
                            <?php endif; ?>
                            <div class="shadow-entry-container">
                                <header class="shadow-entry-header">
                                    <?php if (!empty($section_icon)): ?>
                                        <i class="shadow-section-icon fa <?php echo esc_attr($section_icon); ?>"></i>
                                    <?php endif ?>
                                    <?php if (!empty($author_subtitle)): ?>
                                        <p class="shadow-subtitle"><?php echo esc_html($author_subtitle); ?></p>
                                    <?php endif ?>
                                    <h2 class="shadow-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </header> 
                                <div class="shadow-entry-content">
                                    <?php
                                        $excerpt = kavine_the_excerpt( $excerpt_length );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                    <?php if (!empty($btn_text)) {?>
                                        <a href="<?php the_permalink();?>" class="readmore"><?php echo esc_html($btn_text);?></a>
                                    <?php } ?>    
                                </div><!-- .shadow-entry-content -->

                                <div class="author-signature-image">
                                    <?php if (!empty($signature_img_url)): ?>
                                        <img src="<?php echo esc_url( $signature_img_url );?>">
                                    <?php endif ?>
                                    <?php if (!empty($signature_text)): ?>
                                        <h2 class="signature-text"><?php echo esc_html($signature_text); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div> 
                            
                        </div><!-- .shadow-section-content -->
                    </div>
                </div>
                <?php   
            }
        }
        wp_reset_postdata();