function listar(){
    var xml = new XMLHttpRequest();
    xml.open("GET", "../modelo/matricula-lista.php", true);
    xml.onload = function(){
        if (xml.status == 200){
            document.getElementById("mensaje").innerHTML = xml.responseText;
        }
    };
    xml.send();
};

function nuevo(){
    var xml = new XMLHttpRequest();
    xml.open("GET", "../modelo/nuevo-padre.php", true);
    xml.onload = function(){
        if (xml.status == 200){
            document.getElementById("mensaje").innerHTML = xml.responseText;
        }
    };
    xml.send();
};

function mensajes(){
    var xml = new XMLHttpRequest();
    xml.open("GET", "../modelo/mensajes-lista.php", true);
    xml.onload = function(){
        if (xml.status == 200){
            document.getElementById("mensaje").innerHTML = xml.responseText;
        }
    };
    xml.send();
};