<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <div class='postHeader' style='background-image: url(<?php the_post_thumbnail_url('original'); ?>;)'> 
        <?php the_title('<h2>', '</h2>'); ?>
        <?php the_category('<div class="postHeaderCat">', '</div>'); ?>
        <h6><?php echo get_the_date('j F Y'); ?></h6>
        </div>
  
        <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    
    <article class='post'>
       <div class="postContent">
        <?php the_content(); ?>
       </div>
    </article>

<?php endwhile; ?>
<?php endif; ?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->


    <section class="blog">


        <?php
            global $post;
            $args = array('posts_per_page'=>64);
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                <div class="blogPost">
                    
                    <div class="blogPostImage">
                        <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                        </a>
                        
                        
                        <div class="blogPostDesc">
                            <h6><?php echo get_the_date('j F Y'); ?></h6>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        </div>
                    </div>
                

            <?php endforeach;
            wp_reset_postdata();?>

</section>

  
<?php get_footer(); ?>