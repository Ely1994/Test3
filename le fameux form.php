<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
    <?php
    $tab = ["Citroën", "Renault", "Ford"]
    echo "<form> <select value=\"voiture\">";
    foreach($tab as $var) {
        ech "<option value=\"$var\">$var</option>";
    }
    echo "</form>";
    ?>
    <!--
    <form>
        <select value="voiture">
            <option value="Citroën">Citroën</option>
            <option value="Renault">Renault</option>
            <option value="Ford">Ford</option>
        </select>
    </form>
    -->
</html>