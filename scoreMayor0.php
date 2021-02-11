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

        if($mysqli->connect_errno){
            echo("Connect failed: ".$mysqli->connect_error);
            exit();
        }
        
        $result=$mysqli->query("SELECT * from users");

        echo("<b>Score Mayor que 0 : </b>");
        echo("</br>");

        while($row = $result->fetch_object())
        {
            if (($row->score > 0)) {
                echo($row->id." / ".$row->name." / ".$row->surname." / ".$row->nick." / ".$row->password." / ".$row->score."<br/>");
            }
            
        }
        
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