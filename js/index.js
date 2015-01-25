function dynamicHeight() {
    var height = $(window).height();

    height = parseInt(height) + 'px';
    $(".mainView").css('height',height);
}

$(document).ready(function(){
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
    dynamicHeight();
});