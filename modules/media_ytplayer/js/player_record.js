$(document).ready(function() {
    $(".player").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        btnGo:get_items(),
        scroll:0,
        visible: 1,
        start:0,
        circular: false 
    });

    $(".videos").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        btnGo:get_items(),
        scroll:1,
        visible: 3,
        start:0,
        circular: false 
    });

});

var items = [];
function get_items(){
    $('div.extrainfo').each(function(index) {
        i = index + 1;
        items[index] = ".extrainfo ." + i;
    });

    return items;
}