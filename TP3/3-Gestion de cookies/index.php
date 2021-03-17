<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<!doctype html>
<html>

<?php 
    if(isset($_SESSION['login'])){
        $userlogin = $_SESSION['login'];
        echo "<nav>";
            echo "<nav class='item_menu_deco'> $userlogin </nav>";
        echo "</nav>";
    }
    else {
        $currentPageId = 'login';
    }
    if(isset($_POST['css'])){
        setcookie('style',$_POST['css']);
    }
    if (isset($_COOKIE['style'])){
        $style = $_COOKIE['style'];
    }
    else
        $style = 'style1';
    print($style)
?>
    <head>
        <title>Mehdi Lamatig</title>
        <?php
            echo "<link rel=\"stylesheet\" href=\"$style.css\" type=\"text/css\"
        media=\"screen\" title=\"default\" charset=\"utf-8\" />";
        ?>
    </head>
</html>