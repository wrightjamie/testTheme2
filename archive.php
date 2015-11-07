<?php get_header(); ?>

    <main class="holder">
        <div class="container <?php $testTheme->sidebar_position_class(); ?>">
            <article class="archive">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <section class="item">

                    <?php get_template_part('post','archive'); ?>

                </section>
            <?php endwhile; ?>

            <?php endif; ?>
            </article>
            <?php get_sidebar(); ?>
        </div>
    </main>

<?php get_footer(); ?>