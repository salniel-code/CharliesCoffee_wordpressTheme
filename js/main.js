var foldoutMenu = document.getElementById("nav-menu");
var menuIcon = document.getElementById("menu-icon");
var menuIconClose = document.getElementById("menu-icon-close");


function openmenu(){
    foldoutMenu.style.height = "230px";
    menuIcon.style.display = "none";
    menuIconClose.style.display = "block";
}
function closemenu(){
    foldoutMenu.style.height = "0";
    menuIcon.style.display = "block";
    menuIconClose.style.display = "none";
    menuIconClose.style.fontSize = "40px";
};
window.addEventListener("resize", changemenu);
function changemenu(){
    var browserWidth = window.innerWidth || document.documentElement.clientWidth;
if (browserWidth >800){
    foldoutMenu.style.height = "initial";
} 
else if(browserWidth < 800){
    foldoutMenu.style.height = "0";
};

};