<?php
    $login = $_POST['login'];
    $pseudo = $_POST['pseudo'];
    $password1 = $_POST['password'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users';

    $conn = new mysqli($servername, $username, $password,$database);

    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }

    $sql = $conn->query("INSERT INTO login (Login,Password,Pseudo)
    VALUES ('$login','$pseudo','$password1')");
?>

<h2> Vous êtes bien inscrit.</h2>
<a href=login.php>Connexion</a>