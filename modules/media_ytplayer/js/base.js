$(document).ready(function(){
    $("#player").jCarouselLite({
        //btnNext: ".extrainfo .next",
        //btnPrev: ".extrainfo .prev",
        btnGo:
            [".extrainfo .1", ".extrainfo .2",
            ".extrainfo .3"],
        scroll:1,
        visible: 1,
        start:0,
        circular: false
    });
});
