<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mysqli= new mysqli("localhost", "root", "", "missions");
        $ident=$_GET['number'];

        if($mysqli->connect_errno){
            echo("Connect failed: ".$mysqli->connect_error);
            exit();
        }

        $result=$mysqli->query("SELECT * from quests WHERE id=$ident");
       
        echo("<b>Mission ".$ident." : </b>");
        echo("</br>");
        
        $row = $result->fetch_object(); /*LEE ROW Y AVANZA*/ 

        echo($row->id." / ".$row->descripcion." / ".$row->num_vots." / ".$row->mitjana."<br/>");
        
        $result->free();
        $mysqli->close();
    ?>
    </br>
    </br>
    <button id="mainPage"> Pagina principal </button>
    
    <script type="text/javascript">
        document.getElementById("mainPage").addEventListener("click", goBack);
        function goBack(){
            window.location="./index.html";
        }
    </script>
</body>
</html>