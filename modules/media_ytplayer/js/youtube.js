var ytswf = [];

/**
 * The 'onYouTubePlayerReady' function executes when the onReady event
 * fires, indicating that the player is loaded, initialized and ready
 * to receive API calls.
 * @param {string} playerId Mandatory A value that identifies the player.
 */
function onYouTubePlayerReady(playerId) {
    var lid = "#li-"+playerId;
    $('li.video-yt').each(function(index) {
        if(lid.substr(-1) == index+1){
            ytswf[index+1] = document.getElementById("my" + playerId);
        }
    });
}

/**
 * The 'play' function plays the currently cued/loaded video. It calls
 * player.playVideo().
 */
function play(position) {
    for (var i=1; i < ytswf.length; i++) {
        if (position == i){
            ytswf[i].playVideo();
            $('#extrainfo-' + i).addClass("selected");
        }
        else {
            ytswf[i].stopVideo();
            $('#extrainfo-' + i).removeClass("selected");
        }
    };
}