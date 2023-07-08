var footer = document.getElementById("footer");
var main=document.getElementById("main");


function resize_main(){
    var main_height = main.clientHeight;
    footer.style.Top = main_height+"px";
}

window.addEventListener("load",resize_main);
window.addEventListener("resize",resize_main);