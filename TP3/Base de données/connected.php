<?php
    session_start();
    $login = "anonymous";

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users';

    $conn = new mysqli($servername, $username, $password,$database);

    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }

    $sql = $conn->query("SELECT * from utilisateur");

    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    }
    else
        $errorText = "Merci d'utiliser le formulaire de login";
        
    if(!$successfullyLogged) {
        echo $errorText;
    }
    else {
        $_SESSION['login'] = $tryLogin;
        echo "<h1>Bienvenue ".$login."</h1>";
    }

    if ($_SESSION == array()){
        require_once("login.php");
    }
    else{
        $currentLogin = $_SESSION['login'];
        echo "<center> Vous êtes connecté en tant que $currentLogin";
        echo "<a href=\"disconnected.php\"><button type=\"button\">Déconnexion</button></a></center>";
    }
?>
