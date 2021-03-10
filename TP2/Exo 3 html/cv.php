<!DOCTYPE html>
<html>
    <head>
        <?php
        require_once('template_header.php');
        ?>
    </head>
    <body>
        <h1>Mon CV</h1>
        <nav class="menu">
            <?php
            require_once('template_menu.php');
            renderMenuToHTML('cv');
            ?>
        </nav>
        <article>
            <section>Formation</section>
            <section>Expérience culinaire</section>
            <section><a href="CVMehdiLamatig.pdf">Mon CV</a></section>
        </article>
        <footer>
          <?php
          require_once('template_footer.php');
          ?>
        </footer>
    </body>
</html>