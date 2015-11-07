<?php //TODO this is just one sidebar - need to be able to add two. ?>
<?php if(is_active_sidebar('sidebar')): ?>
    <aside class="sidebar">
        <?php dynamic_sidebar( 'sidebar' ); ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, atque aut commodi deserunt distinctio
            hic iste libero magnam mollitia nisi odio omnis quas quasi repudiandae rerum soluta temporibus vero
            voluptatibus.</p>
    </aside>
<?php endif; ?>