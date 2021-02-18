<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "missions");
    $ident = $_GET['numberUsu'];
    
    if ($mysqli->connect_errno) {
        echo ("Connect failed: " . $mysqli->connect_error);
        exit();
    }

    $result = $mysqli->query("SELECT * from users WHERE id=$ident");

    if(mysqli_num_rows($result) != 0) {
        echo ("<b>Usuario " . $ident . " : </b>");
        echo ("</br>");

        $row = $result->fetch_object(); /*LEE ROW Y AVANZA*/

        echo ($row->id . " / " . $row->name . " / " . $row->surname . " / " . $row->nick . " / " . $row->password . " / " . $row->score . "<br/>");
        $result->free();
        $mysqli->close();
    } else {
        echo ('<b>No existe una misión con este id</b>');
    }


    ?>
    </br>
    </br>
    <button id="volverIndex"> Pagina principal </button>

    <script type="text/javascript">
        document.getElementById("volverIndex").addEventListener("click", volver);

        function volver() {
            window.location = "./index.html";
        }
    </script>
</body>

</html>