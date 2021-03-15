<?php
require_once('template_header.php');
require_once("template_menu.php");

$currentPageId = 'accueil';
if(isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
?>

<header class="bandeau_haut">
<h1 class="titre">Qui suis-je ?</h1>
</header>

<?php
renderMenuToHTML($currentPageId);
?>

<article class="corps">
<?php
$pageToInclude = $currentPageId . ".php";
if(is_readable($pageToInclude))
require_once($pageToInclude);
else
require_once("error.php");
?>
<h2 style="color:purple;">Etudiant-ingénieur à la recherche d'un stage de 4 mois durant lequel je serai amené à:</h2>
  <section style="color:cadetblue;">Co-piloter un ou plusieurs projets</section>
  <section style="color:crimson;">Gérer, synthétiser, améliorer et communiquer sur des indicateurs d'activité et/ou de performance</section>
  <section style="color:mediumorchid">Participer au développement de solutions technologiques ou managériales</section>
  <section style="color:peru">Accompagner les équipes à l'intégration du changement et l'appropriation de nouveaux process</section>
  <footer>Ce stage représente ainsi pour moi l’occasion de développer à la fois ma compréhension des enjeux stratégiques de l'entreprise mais aussi de mieux appréhender la contribution des ingénieurs à la performance et au développement de celle-ci.</footer>
</article>

<?php
require_once('template_footer.php');
?>