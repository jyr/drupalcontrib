var ytswf1;
var ytswf2;
var ytswf3;

function onYouTubePlayerReady(playerId) {
    var lid = "#l-"+playerId;
    if(lid.substr(-1) == 1){
        ytswf1 = document.getElementById("my"+playerId);
    }
    if(lid.substr(-1) == 2){
        ytswf2 = document.getElementById("my"+playerId);
    }
    if(lid.substr(-1) == 3){
        ytswf3 = document.getElementById("my"+playerId);
    }
}

function play(position) {
    if(position == "1"){
        ytswf1.playVideo();
        ytswf2.stopVideo();
        ytswf3.stopVideo();
    }
    
    if(position == "2"){
        ytswf1.stopVideo();
        ytswf2.playVideo();
        ytswf3.stopVideo();
    }

    if(position == "3"){
        ytswf1.stopVideo();
        ytswf2.stopVideo();
        ytswf3.playVideo();
    }

}

function stop() {
    ytswf.stopVideo();
}

function pause() {
    ytswf.pauseVideo();
}

$(document).ready(function(){
    $(".1").click(function(){
        $('#extrainfo-1').addClass("selected");
        $('#extrainfo-2').removeClass("selected");
        $('#extrainfo-3').removeClass("selected");
    });

    $(".2").click(function(){
        $('#extrainfo-1').removeClass("selected");
        $('#extrainfo-2').addClass("selected");
        $('#extrainfo-3').removeClass("selected");
    });

    $(".3").click(function(){
         $('#extrainfo-1').removeClass("selected");
         $('#extrainfo-2').removeClass("selected");
         $('#extrainfo-3').addClass("selected");
    });
});