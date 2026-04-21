<?php get_header(); ?>

<main class="row">
    <div class="column">
        <?php 
        while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="single-post-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                    <div class="post-meta">
                        Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-navigation">
                    <?php previous_post_link('%link', '← Previous Post'); ?>
                    <?php next_post_link('%link', 'Next Post →'); ?>
                </div>

            </article>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>