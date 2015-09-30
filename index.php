<?php include"default-data.php"; ?>

<?php get_header(); ?>

<div class="holder">
    <article id="homeMain" class="container">
        <img src="http://placehold.it/1200x400" alt="">

        <div class="homeMain_content">
            <h2 class="homeMain_title">Lorem ipsum dolor sit.</h2>

            <p class="homeMain_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequatur cupiditate eveniet
                fuga illo
                laborum maxime, minus nam nihil officia placeat quam quasi quidem sed sunt veritatis vitae voluptas.</p>
            <a class="Call" href="#">Join Us</a>
            <a class="Call" href="#LearnMore">Learn More</a>
            <a class="Call" href="#Recent">Recent News</a>
        </div>
    </article>
</div>
<div class="holder" >
    <nav class="container">
        <ul id="main_nav">
            <li>Lorem ipsum.</li>
            <li>Qui, reiciendis.</li>
            <li>Mollitia, veritatis.</li>
            <li>Modi, quam.</li>
            <li>Fuga, quae.</li>
        </ul>
    </nav>
</div>
<div class="holder" id="learnMore">
    <article class="LearnMore container">
        <section class="item">
            <h2 class="LearnMore_title">Challenge Yourself</h2>
            <img src="http://placehold.it/300x200" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
        <section class="item">
            <h2 class="LearnMore_title">Fly High</h2>
            <img src="http://placehold.it/300x200" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
        <section class="item">
            <h2 class="LearnMore_title">Friends for Life</h2>
            <img src="http://placehold.it/300x200" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
        <section class="item">
            <h2 class="LearnMore_title">Be Proud</h2>
            <img src="http://placehold.it/300x200" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
    </article>
</div>
<div class="holder">
    <article id="Recent" class="Recent container">
        <section class="item">
            <h2 class="LearnMore_title">Challenge Yourself</h2>
            <img src="http://placehold.it/400x300" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
        <section class="item">
            <h2 class="LearnMore_title">Fly High</h2>
            <img src="http://placehold.it/400x300" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
        <section class="item">
            <h2 class="LearnMore_title">Friends for Life</h2>
            <img src="http://placehold.it/400x300" alt="">
            <p>Do you want to Every Air Cadet has the opportunity to fly in a 2 seat aircraft at least once each year.</p>
            <p class="learnMore_link"><a href="#">Learn More...</a></p>
        </section>
    </article>
</div>

<div class="holder">
    <main class="container content-only">
        <article class="archive">
            <?php createContent(array('repeat'=>12, 'p length'=>1)); ?>
        </article>
    </main>
</div>
<div class="holder">
    <main class="container content-sidebar">
        <article class="archive">
            <?php createContent(array('repeat'=>12, 'p length'=>1)); ?>
        </article>
        <aside class="sidebar">
            <ul>
                <?php createContent(array('repeat'=>4, 'element'=>'li','img'=>FALSE, 'p length'=>array(1,2))); ?>
            </ul>
        </aside>
    </main>
</div>
<div class="holder">
    <main class="container sidebar-content">
        <article class="archive">
            <?php createContent(array('repeat'=>12, 'p length'=>1)); ?>
        </article>
        <aside class="sidebar">
            <ul>
                <?php createContent(array('repeat'=>4, 'element'=>'li','img'=>FALSE, 'p length'=>array(1,2))); ?>
            </ul>
        </aside>
    </main>
</div>
<div class="holder">
    <main class="container sidebar-content">
        <?php createContent(array('element'=>'article', 'p number'=>array(5,10), 'class'=>'article item')); ?>
        <aside class="sidebar">
            <ul>
                <?php createContent(array('repeat'=>4, 'element'=>'li','img'=>FALSE, 'p length'=>array(1,2))); ?>
            </ul>
        </aside>
    </main>
</div>

<?php get_footer(); ?>