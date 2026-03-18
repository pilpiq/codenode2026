<?php get_header(); ?>
<h2> Blog </h2>
<?php if (have_posts()) :?>
    <?php wihle (have_posts()) : the post(); ?>
    <article>
        <h2> 
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p> <?php the_excerpt(); ?> </p>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p>No hay posts</p>
    <?php endif; ?>
    <?php get_footer(); ?>

