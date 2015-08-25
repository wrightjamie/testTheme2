<?php include"default-data.php"; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="nojs" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<?php
/*
 * Time for the website content
 */
?>
<div class="holder">
    <header id="banner" class="container">
        <h1>2459 Squadron</h1>
        <p>Poulton-le-Fylde</p>
    </header>
</div>

<div class="holder">
    <article id="homeMain" class="container">
        <img src="http://placehold.it/1200x600" alt="">

        <div>
            <h2>Lorem ipsum dolor sit.</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequatur cupiditate eveniet
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
<div class="holder">
    <header class="container item">
        <h3>Lorem ipsum dolor sit amet.</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consectetur cupiditate debitis
            distinctio earum eos et hic id ipsa nulla obcaecati officia quae quibusdam quo, sequi similique suscipit
            vero.</p>
    </header>
    <article class="LearnMore container">
        <?php createContent(array('repeat'=>4, 'p length'=>1)); ?>
    </article>
</div>
<div class="holder">
    <header class="container item">
        <h3>Lorem ipsum dolor sit amet.</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consectetur cupiditate debitis
            distinctio earum eos et hic id ipsa nulla obcaecati officia quae quibusdam quo, sequi similique suscipit
            vero.</p>
    </header>
    <article id="Recent" class="Recent container">
        <?php createContent(array('repeat'=>3, 'p length'=>1)); ?>
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
<div class="holder">
    <footer id="siteFooter" class="container">
        <nav>
            <ul>
                <li>Lorem ipsum.</li>
                <li>Qui, reiciendis.</li>
                <li>Mollitia, veritatis.</li>
                <li>Modi, quam.</li>
                <li>Fuga, quae.</li>
            </ul>
        </nav>
    </footer>
</div>
<?php
/*
 * And now tidy everything up...
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>

<?php wp_footer() ?>
</body>
</html>