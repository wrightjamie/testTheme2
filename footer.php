<?php
/**
 * Created by PhpStorm.
 * User: Jamie
 * Date: 01/09/2015
 * Time: 17:20
 */
?>

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
<div class="holder">
    <div class="container">
        <span class="copyright">
            <?php echo get_theme_mod('copyright', 'Copyright '.date('Y')); ?>
        </span>
    </div>
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