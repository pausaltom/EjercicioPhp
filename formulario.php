<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php

    $ident = $_GET['identificador'];
    $desc = $_GET['descripcio'];

    $mysqli = new mysqli("localhost", "root", "", "missions");

    if ($mysqli->connect_errno) {
        echo ("Connect failed: " . $mysqli->connect_error);
        exit();
    }

    $result = $mysqli->query("INSERT INTO quests(id, descripcio) VALUES ($ident, '$desc')");
    echo ($mysqli->error);
    $mysqli->close();
    ?>
</body>

</html>