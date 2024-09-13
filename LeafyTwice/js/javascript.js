function cierre(){
    document.getElementById("fin").submit();
}

function menu() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}

function cerrar(){
  if(confirm("Desea cerrar sesion?")){
      return true;
  }else{
      return false;
  }
}