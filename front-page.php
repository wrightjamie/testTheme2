<?php include "default-data.php"; ?>

<?php get_header(); ?>
<?php if (have_posts()):?>
    <div class="holder">
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article id="homeMain" class="container">
            <img src="http://placehold.it/1400x400" alt="">
            <div class="homeMain_content">
                <h2 class="homeMain_title"><?php the_title(); ?></h2>
                <p class="homeMain_text"><?php the_excerpt(); ?></p>
                <a class="Call" href="#">Join Us</a>
                <a class="Call" href="#LearnMore">Learn More</a>
                <a class="Call" href="#Recent">Recent News</a>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
    <div class="holder">
        <?php $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'depth' => 1,
            'container_class' => 'container'
        );
        //TODO Multi level main menu
        wp_nav_menu( $args ); ?>
    </div>
<?php endif; ?>

<?php
//Learn More Loop...
$args = array(
    'post_type' => 'page',
    'post__in' => get_theme_mod('front-page-learn-more'),
    'posts_per_page' => 3,
    'no_found_rows' => true
);

$learnMoreQuery = new WP_Query($args);
if ($learnMoreQuery->have_posts()): ?>
    <div class="holder">
        <article id="LearnMore" class="LearnMore container">
    <?php
while ($learnMoreQuery->have_posts()) :
    $learnMoreQuery->the_post(); ?>
            <section class="item">
                <h2 class="LearnMore_title"><?php the_title(); ?></h2>
                <img src="http://placehold.it/400x300" alt="">

                <p><?php the_excerpt(); ?></p>

                <p class="learnMore_link"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More... (Add option to change text)</a></p>
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
$activitiesQuery = new WP_Query($args);
if ($activitiesQuery->have_posts()): ?>
<div class="holder">
    <article id="Activities" class="Activities container">
        <?php
        while ($activitiesQuery->have_posts()) :
            $activitiesQuery->the_post(); ?>
            <section class="item">
                <h2 class="activities_title"><?php the_title(); ?></h2>
                <img src="http://placehold.it/400x300" alt="">

                <p><?php the_excerpt(); ?></p>

                <p class="activities_link"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More... (Add option to change text)</a></p>
            </section>
        <?php endwhile; ?>
    </article>
</div>
<?php endif; ?>

<?php get_footer(); ?>