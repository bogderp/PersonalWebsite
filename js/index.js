$(document).ready(function(){

    $(".navbar").headroom({
        "offset": 205,
        "tolerance": 5,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });

});