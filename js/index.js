function dynamics(height, width) {
    height = parseInt(height) + 'px';
    width = parseInt(width) + 'px';
    $(".mainView").css('height',height);
    $(".mobileMenu ul").css('width', width);
}

$(document).ready(function(){
    var height = $(window).height();
    var width = $(window).width();

    if ((width/[(24/100)*height]) < (5347/1708)) {
        $('.projects').attr('src', 'img/works2.png');
    }
    else {
        $('.projects').attr('src', 'img/works.png');
    }

    if (width < 350) {
        $('.brand').html('B. Pozderca');
        $('#icons').css('left', '150px');
    }

    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
    dynamics(height,width);

    $(window).resize(function() {
        if (($(window).width()/[(24/100)*$(window).height()]) < (5347/1708)) {
            $('.projects').attr('src', 'img/works2.png');
        }
        else {
            $('.projects').attr('src', 'img/works.png');
        }

        if ($(window).width() < 350) {
            $('.brand').html('B. Pozderca');
            $('#icons').css('left', '150px');
        }
    });

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

    $(".seeMore").click(function() {
        $('html,body').animate({
            scrollTop: $("#A").offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 3  },
            1500);
        $(".seeMore").fadeOut(1500); 
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() == 0) {
            $(".seeMore").fadeIn(); 
        }
        else {
            $(".seeMore").fadeOut(); 
        }
    });
});