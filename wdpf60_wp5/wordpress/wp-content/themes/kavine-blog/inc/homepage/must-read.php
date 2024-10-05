<?php
    /**
 * Template part for displaying front page Featured.
 *
 * @package Shadow Themes
 */

/// Get default  mods value.
$must_read_enable = get_theme_mod( 'kavine_blog_must_read_section_enable', true );

if ( false == $must_read_enable ) {
    return;
} 

$default = kavine_blog_get_default_mods();
$header_font_size = get_theme_mod( 'kavine_blog_must_read_header_font_size');
$title_font_size = get_theme_mod( 'kavine_blog_must_read_post_font_size');
$must_read = get_theme_mod( 'kavine_blog_must_read_content_type', 'cat' );
$must_read_section_title = get_theme_mod( 'kavine_blog_must_read_title', $default['kavine_blog_must_read_title'] );
$must_read_num = get_theme_mod( 'kavine_blog_must_read_num', 4 );
$must_read_col = get_theme_mod( 'kavine_blog_must_read_column', 2 );
$excerpt_length = get_theme_mod( 'kavine_blog_must_read_secion_excerpt',20); 
$current_post_id= get_the_id();
$section_subtitle = get_theme_mod( 'kavine_blog_must_read_subtitle');
$see_all_text = get_theme_mod( 'kavine_blog_must_read_see_all_text');
$see_all_url = get_theme_mod( 'kavine_blog_must_read_see_all_url');
$section_bg_image = get_theme_mod( 'kavine_blog_must_read_background_image');
?>
<div id="must-read" class="page-section relative <?php if (!empty($section_bg_image)){ ?>bg-image<?php } ?>" <?php if (!empty($section_bg_image)){ ?> style="background-image: url('<?php echo esc_url($section_bg_image); ?>');" <?php } ?>>
    <?php if (!empty($section_bg_image)): ?>
        <div class="bg-overlay"></div>
        <div class="bg-overlay-two"></div>
    <?php endif; ?>
    <div class="wrapper">
        <?php if(!empty($must_read_section_title) || !empty($section_subtitle)):?>
            <div class="shadow-section-header">
                <?php $section_icon = get_theme_mod( 'kavine_blog_must_read_icon'); ?>
                <?php if (!empty($section_icon)): ?>
                    <i class="shadow-section-icon fa <?php echo esc_attr($section_icon); ?>"></i>
                <?php endif ?>
                <?php if(!empty($section_subtitle)):?>
                    <p class="shadow-subtitle"><?php echo esc_html($section_subtitle);?></p>
                <?php endif;?>
                <?php if(!empty($section_subtitle)):?>
                    <h2 class="shadow-section-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px; " ><?php echo esc_html($must_read_section_title);?></h2>
                <?php endif; ?>
            </div><!-- .shadow-section-header -->
        <?php endif; ?>
        <div class="shadow-section-content column-<?php echo esc_attr($must_read_col); ?>">
            <?php 
                $must_read_cat_id = get_theme_mod( 'kavine_blog_must_read_cat' );
                $args = array(
                    'cat' => $must_read_cat_id,   
                    'posts_per_page' => $must_read_num,
                    'ignore_sticky_posts' => true,
                );
                $query = new WP_Query( $args );

                $i = 1;
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) :
                        $query->the_post();
                        ?>
                        <article>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php echo the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->

                            <div class="shadow-entry-container">

                                <header class="shadow-entry-header">
                                    <h2 class="shadow-entry-title"><a href="<?php echo the_permalink();?> " style="font-size: <?php echo esc_attr($title_font_size); ?>px; "><?php the_title();?></a></h2>
                                </header>
                                <div class="shadow-entry-meta">
                                    <?php kavine_blog_cats();  ?>
                                </div>
                                <div class="shadow-entry-content">
                                    <?php
                                        $excerpt = kavine_the_excerpt( $excerpt_length );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                    <div class="shadow-entry-meta">
                                        <?php kavine_blog_comment(); ?>
                                        <?php kavine_blog_posted_on(); ?>
                                    </div>
                                </div><!-- .shadow-entry-content -->
                                <?php $readmore_text = get_theme_mod( "kavine_blog_must_read_custom_btn_" . $i );?>
                                <?php if (!empty($readmore_text)) {?>
                                    <div class="read-more">
                                        <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                                    </div><!-- .read-more -->
                                <?php } ?>
                            </div><!-- .shadow-entry-container -->
                        </article>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
        </div>
        <?php if (!empty($see_all_text) && !empty($see_all_url)): ?>
                <div class="section-readmore content-center">
                    <a href="<?php echo esc_url($see_all_url) ?>" class="link-readmore"><?php echo esc_html($see_all_text);?></a>
                </div>
            <?php endif; ?>
    </div>
</div>