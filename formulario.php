<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php

    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $nick = $_GET['nick'];
    $password = $_GET['password'];
    $score = $_GET['score'];
    if ($score == null) {
        $score = 0;
    }

    $mysqli = new mysqli("localhost", "root", "", "missions");

    if ($mysqli->connect_errno) {
        echo ("Connect failed: " . $mysqli->connect_error);
        exit();
    }
    $comprobacion = $mysqli->query("SELECT * from users WHERE nick='$nick'");
    if (mysqli_num_rows($comprobacion) > 0) {
        echo ("Ya existe un usuario con este nick");
    } else {
        $result = $mysqli->query("INSERT INTO users(name,surname,nick,password,score) VALUES ('$name', '$surname','$nick','$password',$score)");
        echo("Usuario creado con exito!!");
    }
    echo ($mysqli->error);
    $mysqli->close();
    ?>
    </br>
    <button id="mainPage"> Crear otro usuario </button>
    <script type="text/javascript">
        document.getElementById("mainPage").addEventListener("click", goBack);
        function goBack() {
            window.location = "./formulario.html";
        }
    </script>
</body>

</html>