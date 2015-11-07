<?php include "default-data.php"; ?>

<?php get_header(); ?>


<?php if (have_posts()): ?>
    <main class="holder">
        <article class="item container <?php $testTheme->sidebar_position_class(); ?>">
            <?php get_template_part('post','single'); ?>
        </article>
    </main>
<?php endif; ?>

<?php get_footer(); ?>