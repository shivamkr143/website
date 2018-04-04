var navEvents = document.getElementById('events-submenu');
var navComp = document.getElementById('competitions-submenu');
var navWorkshop = document.getElementById('workshops-submenu');
var video = document.getElementById("bgvideo");
            video.currentTime = 3;
            video.playbackRate = 1;
            video.play();
            
            video.addEventListener('ended', function(){
                this.currentTime = 3;
                this.play()
            });


                             
            
function T18(){
    document.getElementById('T18').style.backgroundColor = "#f8f8f8"
}




window.addEventListener('scroll',function(){
             
        var scrolpos = window.scrollY;          
        
        if(scrolpos >= 100){
            document.getElementById("mySidenav").style.width = "250px";
        }
        else{
            document.getElementById("mySidenav").style.width = "0";
        }
        
        }
    )

function events(){
    

    navEvents.style.height = "170px";
    navComp.style.height = "0"
    navWorkshop.style.height = "0";
}

function competitions(){
    
    navComp.style.height = "170px";
    navEvents.style.height = "0";
    navWorkshop.style.height = "0";
}

function workshops(){
    
    navWorkshop.style.height = "150px";
    navEvents.style.height = "0";
    navComp.style.height = "0";
}






