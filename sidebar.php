<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p><?php the_author_meta('description'); ?> </p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives('type=monthly'); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="http://www.dimitrigaillot.com/">Portfolio D.G.</a></li>
            <li><a href="https://www.reddit.com/user/Mijka-/m/newsics/">New techno Reddit</a></li>
            <li><a href="https://news.ycombinator.com/">HackerNews</a></li>
        </ol>
    </div>
</div>
<!-- /.blog-sidebar -->