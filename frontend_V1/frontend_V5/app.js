window.onload = init;
function init(){
    eventosLogos();
    dropMenuEvent();
    //eventosLogos2();
    removeElement();
    //sustituirConLogos();
}
function eventosLogos(){
    var enlaces = document.getElementsByTagName("img");
    for(i=0;i<enlaces.length;i++){
        enlaces[i].addEventListener("click", paginasWeb);
    }
}
function paginasWeb(){
    window.open("https://"+this.alt+".com");
}
/*
function dropMenuEvent(){
    var miSubMenu = document.getElementById("submenu");
    miSubMenu.addEventListener("mouseover", showMenu);
    miSubMenu.addEventListener("mouseleave", hideMenu);
}
function showMenu(){
    document.getElementById("subMenuList").style.display = "inline";
}
function hideMenu(){
    document.getElementById("subMenuList").style.display = "none";
}
*/
function eventosLogos2(){

}
function sustituirConLogos(){
    var palabras = document.getElementsByClassName("logo");
    var nuevasPalabras = Array ();
    for(i=0;i<palabras.length;i++){
        /*nuevasPalabras[i] = */
        console.log(palabras[i].textContent.toLocaleLowerCase());
    }
    //SUSTITUIR CON NOMBRES DE IMAGENES.
}
function removeElement(){
    if(window.innerWidth < 500){
        var toRemove = document.getElementsByClassName("logo");
        for(i=toRemove.length-1;i>=0;i--){
            toRemove[i].remove();
        }
    }
}