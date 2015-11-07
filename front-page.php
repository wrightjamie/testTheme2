<?php get_header(); ?>
<?php if (have_posts()):?>
    <main class="holder-banner">
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article id="homeMain" class="container">
            <img src="http://placehold.it/1400x400" alt="">
            <div class="homeMain_content">
                <h2 class="title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="content"><?php the_excerpt(); ?></p>
                <a class="Call" href="#">Join Us</a>
                <a class="Call" href="#LearnMore">Learn More</a>
                <a class="Call" href="#Recent">Recent News</a>
            </div>
        </article>
        <?php endwhile; ?>
    </main>
<?php endif; ?>

<?php
//Learn More Loop...
$args = array(
    'post_type' => 'page',
    'post__in' => get_theme_mod('front-page-learn-more'),
    'posts_per_page' => 3,
    'no_found_rows' => true
);
query_posts($args); ?>
<?php if (have_posts()): ?>
    <div class="holder">
        <article class="container LearnMore" id="LearnMore">
            <?php while (have_posts()): ?>
                <section class="item">
                    <?php get_template_part('post','front'); ?>
                </section>
            <?php endwhile; ?>
        </article>
    </div>
<?php endif; ?>

<?php
//Learn More Loop...
$args = array(
    'post_type' => 'page',
    'post__in' => get_theme_mod('front-page-activities'),
    'posts_per_page' => 4,
    'no_found_rows' => true
);
query_posts($args); ?>
<?php if (have_posts()): ?>
    <div class="holder">
        <article class="container Activities" id="Activities">
            <?php while (have_posts()): ?>
                <section class="item">
                    <?php get_template_part('post','front'); ?>
                </section>
            <?php endwhile; ?>
        </article>
    </div>
<?php endif; ?>

<?php get_footer(); ?>