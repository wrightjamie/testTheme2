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
<div class="container">
    <header id="banner">
        <h1>2459 Squadron</h1>
        <p>Poulton-le-Fylde</p>
        <nav>
            <ul id="main_nav">
                <li>Lorem ipsum.</li>
                <li>Qui, reiciendis.</li>
                <li>Mollitia, veritatis.</li>
                <li>Modi, quam.</li>
                <li>Fuga, quae.</li>
            </ul>
        </nav>
    </header>
</div>
<div class="container">
    <article id="homeMain">
        <img src="http://placehold.it/1200x400" alt="">

        <div>
            <h2>Lorem ipsum dolor sit.</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequatur cupiditate eveniet
                fuga illo
                laborum maxime, minus nam nihil officia placeat quam quasi quidem sed sunt veritatis vitae voluptas.</p>
        </div>
    </article>
</div>
<div class="container">
    <article class="LearnMore">
        <section class="item"><img src="http://placehold.it/400x300" alt="">

            <h3>Lorem ipsum dolor sit amet.</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, cupiditate delectus error labore
                laudantium minima nam nisi omnis quibusdam quis, quod repellendus reprehenderit sit tempora vero. Beatae
                ipsam quae rerum.</p>
        </section>
        <section class="item"><img src="http://placehold.it/400x300" alt="">

            <h3>Commodi nam omnis placeat recusandae?</h3>

            <p>Ad animi enim iusto magnam neque numquam repudiandae veritatis? Atque dicta doloremque explicabo, ipsum
                laborum natus quos repudiandae! Aut ducimus impedit laboriosam, necessitatibus nihil quo ratione
                reiciendis reprehenderit tempore vitae.</p>
        </section>
        <section class="item"><img src="http://placehold.it/400x300" alt="">

            <h3>Consequuntur corporis perferendis ullam voluptatum?</h3>

            <p>Accusamus adipisci architecto commodi consequatur debitis numquam repudiandae. Blanditiis dolorum fugit
                nulla repellat vero. Accusantium adipisci consequatur dolorem eligendi, enim esse incidunt, laudantium
                non obcaecati, possimus sapiente similique sit temporibus.</p>
        </section>
    </article>
</div>
<div class="container">
    <footer id="siteFooter">
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