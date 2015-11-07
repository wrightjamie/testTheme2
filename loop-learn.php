<?php
/**
 * Created by PhpStorm.
 * User: Jamie
 * Date: 30/10/2015
 * Time: 21:12
 */
?>

<?php if (have_posts()): ?>
    <div class="holder">
    <article class="container LearnMore" id="LearnMore">
        <?php while (have_posts()): ?>
        <section class="item">
            <?php the_post(); ?>
            <header>
                <h2 class="title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
            </header>
            <div class="content">
                <img src="http://placehold.it/400x300" alt="">
                <?php the_excerpt(); ?>
            </div>
            <footer>
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More...</a>
            </footer>
        </section>
        <?php endwhile; ?>
    </article>
    </div>
<?php endif; ?>