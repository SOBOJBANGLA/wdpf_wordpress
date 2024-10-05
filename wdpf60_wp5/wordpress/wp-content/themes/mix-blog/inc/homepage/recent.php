<?php
    /**
 * Template part for displaying front page must_read.
 *
 * @package Shadow Themes
 */

/// Get default  mods value.
$must_read_enable = get_theme_mod( 'mix_blog_must_read_section_enable', false );

if ( false == $must_read_enable ) {
    return;
}
$header_font_size = get_theme_mod( 'mix_blog_must_read_header_font_size');
$title_font_size = get_theme_mod( 'mix_blog_must_read_post_font_size');
$must_read = get_theme_mod( 'mix_blog_must_read_content_type', 'cat' );
$must_read_section_title = get_theme_mod( 'mix_blog_must_read_title');
$must_read_section_subtitle = get_theme_mod( 'mix_blog_must_read_subtitle');
$must_read_num = get_theme_mod( 'mix_blog_must_read_num', 6 );
$excerpt_length = get_theme_mod( 'mix_blog_must_read_secion_excerpt',10); ?>

<div id="must-read" class="page-section">
    <div class="wrapper">
        <?php if(!empty($must_read_section_title)):?>
            <div class="shadow-section-header">
                <h2 class="shadow-section-title"><?php echo esc_html($must_read_section_title);?></h2>
            </div><!-- .shadow-section-header -->
        <?php endif; ?>
        <div class="shadow-section-content column-3">
            <?php
                $must_read_cat_id = get_theme_mod( 'mix_blog_must_read_cat' );
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
                                        <h2 class="shadow-entry-title"><a href="<?php echo the_permalink();?>" ><?php the_title();?></a></h2>
                                    </header>

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
                                    <?php $readmore_text = get_theme_mod( "mix_blog_must_read_custom_btn_" . $i );?>
                                    <?php if (!empty($readmore_text)) {?>
                                        <div class="read-more">
                                            <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                                        </div><!-- .read-more -->
                                    <?php } ?>
                                </div><!-- .shadow-entry-container -->
                            </article>
                    <?php $i++;
                        endwhile;
                    endif; 
                    wp_reset_postdata(); ?>
        </div>
    </div>
</div>