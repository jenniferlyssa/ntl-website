<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>
        <p><?php _e('Desculpe, essa página não existe.'); ?></p>
    <?php endif; ?>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>  