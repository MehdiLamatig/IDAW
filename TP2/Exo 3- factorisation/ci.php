<?php
require_once('template_header.php');
?>

<h1>Centre d'intérêts</h1>

<?php
require_once('template_menu.php');
renderMenuToHTML('ci');
?>

<article class="corps">
    <section>Sport</section>
    <section>Management</section>
    <section>Voyage</section>
</article>

<?php
require_once('template_footer.php');
?>