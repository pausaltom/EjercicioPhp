<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php

    $id = $_GET['id'];
    $score = $_GET['score'];
    if ($score == null) {
        $score = 0;
    }

    $mysqli = new mysqli("localhost", "root", "", "missions");

    if ($mysqli->connect_errno) {
        echo ("Connect failed: " . $mysqli->connect_error);
        exit();
    }
    $comprobacion = $mysqli->query("SELECT * from users WHERE id=$id");
    if (mysqli_num_rows($comprobacion) <= 0) {
        echo ("No existe ningún usuario con este identificador");
    } else {
        $result = $mysqli->query("UPDATE users SET score=$score WHERE users.id = $id");
        echo("Score del usuario actualizado con exito!!");
    }
    echo ($mysqli->error);
    $mysqli->close();
    ?>
    </br>
    <button id="mainPage"> Actualizar otro registro </button>
    <script type="text/javascript">
        document.getElementById("mainPage").addEventListener("click", goBack);
        function goBack() {
            window.location = "./formularioScore.html";
        }
    </script>
</body>

</html>