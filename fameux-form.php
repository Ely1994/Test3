<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="fameux-post.php">
    <select value="voiture">
    <?php
    $tab = ["Citroën", "Renault", "Ford", "Seat", "Audi", "Volkswagen", "Porshe"];
    foreach($tab as $var) {
        echo "<option value=\"$var\">$var</option>";
    }
    ?>
    </select>
    <input type="submit" value="Envoyer" />
</form>
        <!--
    <form>
        <select value="voiture">
            <option value="Citroën">Citroën</option>
            <option value="Renault">Renault</option>
            <option value="Ford">Ford</option>
        </select>
    </form>
    -->
</body>
</html>