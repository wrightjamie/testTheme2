<?php the_post(); ?>
<header>
    <h2 class="title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
</header>
<div class="content">
    <img src="http://placehold.it/400x300" alt="">
    <?php the_content(); ?>
</div>
<footer>
    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_tags( '| ' ); ?></p>
</footer>