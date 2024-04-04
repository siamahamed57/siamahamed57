var icon=document.getElementById("icon");
icon.onclick=function(){
    document.body.classList.toggle("dark-theme")
    if(document.body.classList.contains("dark-theme")){
        icon.src="../homeimg/sun.png";
    }
    else{
        icon.src="../homeimg/moon.png";
    }
}
window.onload = function() {
    var iframes = document.getElementsByTagName('iframe');
    for (var i = 0; i < iframes.length; i++) {
      iframes[i].setAttribute('autoplay', false);
    }
  };
  const player = new Plyr('#video2'); // Replace 'Plyr' with 'videojs' if using Video.js
  player.config.options.controls.play = '►'; // Example for Plyr
  player.config.colors = { primary: 'pink' }; // Example for Plyr
  
  // Example for Video.js (using CSS classes):
  /* .vjs-play-control { background-color: purple; } */
  