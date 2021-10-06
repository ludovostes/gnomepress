video = document.getElementsByTagName("iframe")[0];
//videoDiv = document.getElementById("mediacontainer");
videoDiv = document.getElementsByTagName("html")[0];
playButton = document.getElementById('playbutton');
playButtonCoord = playButton.getBoundingClientRect();
playButtonTop = playButtonCoord.top;
playButtonLeft = playButtonCoord.left;
videoTitle = document.getElementById('titrevideo');

// playButton.addEventListener("click", ()=>{
//     video.src += "&autoplay=1";
//     playButton.style.display = "none";
//     videoTitle.style.display = "none";
//     //toggle une classe quand on clique sur la vidéo peut-être
// })

playButton.addEventListener("click", ()=>{
    video.src += "&autoplay=1";
    playButton.classList.toggle("hidden");
    videoTitle.classList.toggle("hidden");
})

videoDiv.addEventListener("mouseover", (e)=>{
    playButton.style.left = e.pageX-playButtonTop + 'px' 
    playButton.style.top = e.pageY-playButtonLeft + 'px'
})

// videoDiv.addEventListener("mouseout", ()=>{
//     playButton.style.left = 50 + "%"
//     playButton.style.top = 50 + "%"
// })
