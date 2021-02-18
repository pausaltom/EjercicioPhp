

function irTodasMisiones() {
    window.location = "./todasQuests.php";
}
function irTodosUsuarios() {
    window.location = "./todosUsuarios.php";
}
function scoreMayor0() {
    window.location = "./scoreMayor0.php";
}

function irMissionID() {
    var id = document.getElementById("id").value;
    
    if (id === "" || id === null) {
        alert("necesitas introducir un id para realizar la consulta");
        return null;
    } else {
        window.location = "./missionPorId.php?number=" + document.getElementById("id").value;
    }
    

}
function irUsuarioID() {
    var id = document.getElementById("id").value;
    
    if (id === "" || id === null ) {
        alert("necesitas introducir un id para realizar la consulta");
        return null;
    } else {
        window.location = "./usuarioPorId.php?numberUsu=" + document.getElementById("id").value;
    }
    
    
}



function loadEvents() {
    document.getElementById("irTodasQuests").addEventListener("click", irTodasMisiones);
    document.getElementById("irTodosUsu").addEventListener("click", irTodosUsuarios);
    document.getElementById("scoreMayor0").addEventListener("click", scoreMayor0);
    document.getElementById("irQuests").addEventListener("click", irMissionID);
    document.getElementById("irUsu").addEventListener("click", irUsuarioID);


}