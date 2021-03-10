<html>
    <head>
        <?php
        require_once('template_header.php');
        ?>
    </head>
    <body>
        <h1>Centre d'intérêts</h1>
        <nav class="menu">
            <?php
            require_once('template_menu.php');
            renderMenuToHTML('ci');
            ?>
        </nav>
        <article>
            <section>Sport</section>
            <section>Management</section>
            <section>Voyage</section>
        </article>
        <footer>
          <?php
          require_once('template_footer.php');
          ?>
        </footer>
    </body>
</html>