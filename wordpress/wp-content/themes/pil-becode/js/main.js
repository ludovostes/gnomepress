video = document.getElementsByTagName("iframe")[0];
videoDiv = document.getElementById("mediacontainer");
playButton = document.getElementById('playbutton');
videoTitle = document.getElementById('titrevideo');
accordeonButtons = document.getElementsByClassName('entreprises-accordeonbutton');
entreprisesInfos = document.getElementsByClassName('entreprises-info');

if(playButton){
    playButton.addEventListener("click", ()=>{
        video.src += "&autoplay=1";
        playButton.classList.toggle("hidden");
        videoTitle.classList.toggle("hidden");
    })
}

if(videoDiv){
    videoDiv.addEventListener("mouseover", (e)=>{
        playButton.style.left = e.pageX + 'px'
        playButton.style.top = e.pageY-150 + 'px'
    })

    videoDiv.addEventListener("mouseout", ()=>{
        playButton.style.left = 50 + "%"
        playButton.style.top = 50 + "%"
    })
}

if(accordeonButtons){
    for (const [i,e] of Object.entries(accordeonButtons)) {//pour chaque element
        e.addEventListener("click", ()=>{//on ajoute un eventlistener
            for (const [ind,elem] of Object.entries(accordeonButtons)) {//qui check pour chaque autre élément si ils sont les mêmes
                if(i === ind) {//si oui, au clic, on toggle la classe qui les cachent, ou reset
                    elem.classList.toggle("entreprises-accordeonbuttonreset");
                    entreprisesInfos[ind].classList.toggle("displayNone");
                } else {//si non, on ajoute la classe qui les cachent, ou reset
                    elem.classList.add("entreprises-accordeonbuttonreset");
                    entreprisesInfos[ind].classList.add("displayNone");
                }
            }
        })
    };
}