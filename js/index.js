function dynamics() {
    var height = $(window).height();
    var width = $(window).width();
    height = parseInt(height) + 'px';
    width = parseInt(width) + 'px';
    $(".mainView").css('height',height);
    $(".mobileMenu ul").css('width', width);
}

$(document).ready(function(){
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
    dynamics();

    isVisible = 0;
    $('.mobileMenu').click(function(){
    	if(isVisible) {
    		$('.mobileMenu li').fadeOut('slow');
    		isVisible = 0;
    	} else {
    		$('.mobileMenu li').fadeIn('slow');
    		isVisible = 1;
    	}
    	
    })
});