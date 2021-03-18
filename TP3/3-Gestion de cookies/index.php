<form id="style_form" action="index.php" method="POST">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<!doctype html>
<html>

<?php
    if(isset($_POST['css'])){
        setcookie('style',$_POST['css'], time()+3600);
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