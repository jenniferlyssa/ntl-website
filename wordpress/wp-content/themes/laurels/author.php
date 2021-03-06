<?php 
/*
 * Author Template File.
 */
get_header(); ?>
<section>	
    <div class="laurels_menu_bg">
    	<div class="webpage-container container">
       	<div class="laurels_menu">
     	<h1><?php _e('Author ','laurels'); echo ": ". __('All posts by ','laurels'), get_the_author(); ?></h1>
            <div class="breadcrumb site-breadcumb">
				<?php if (function_exists('laurels_custom_breadcrumbs')) laurels_custom_breadcrumbs(); ?>
            </div>
            </div>
    	</div>
    </div>
    <div class="container webpage-container">
    	<article class="blog-article">        
            <div class="col-md-9 col-sm-8 blog-page">
		  <?php while ( have_posts() ) : the_post();
            $laurels_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                <div class="blog">
                    <div class="blog-data">
                        <div class="blog-date text-center">
                            <h2 class="color_txt"> <?php echo get_the_date('d'); ?></h2>
                            <h3><?php echo get_the_date('M'); ?></h3>
                        </div>
                        <div class="blog-info">
                            <a href="<?php echo get_permalink(); ?>" class="heading"><?php the_title(); ?></a>
                            <div class="breadcrumb blog-breadcumb">
                               <?php laurels_entry_meta(); ?>   
                            </div>
                        </div>
                        <?php if(!empty($laurels_image)) { ?>
						<div class="blog-rightsidebar-img">
							<img src="<?php echo  esc_url($laurels_image); ?>" class="img-responsive" alt="<?php the_title(); ?>" />
						</div>
                        <?php } ?>
                        <div class="blog-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>	
     <?php endwhile;
            if (function_exists('faster_pagination') ) {
                faster_pagination('','1');
            }else {
            if(get_option('posts_per_page ') < $wp_query->found_posts) { ?>
        <div class="col-md-12 laurels-default-pagination">
            <span class="laurels-previous-link"><?php previous_posts_link(); ?></span>
            <span class="laurels-next-link"><?php next_posts_link(); ?></span>
        </div>
        <?php }
            } ?>
            </div>
            <?php get_sidebar(); ?>
    	</article>
    </div>
</section>
<?php get_footer(); ?>