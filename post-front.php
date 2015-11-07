<?php the_post(); ?>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <h2 class="title">
        <?php the_title(); ?>
    </h2>
    <?php the_post_thumbnail('thumbnail'); ?>
</a>