var icon=document.getElementById("icon");
icon.onclick=function(){
    document.body.classList.toggle("dark-theme")
    if(document.body.classList.contains("dark-theme")){
        icon.src="homeimg/sun.png";
    }
    else{
        icon.src="homeimg/moon.png";
    }
}
