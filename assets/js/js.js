$(document).ready(function () {

    // --------------------------------------artical-----------------------
    $('.slider-arti').slick({
        rtl: true,
        slidesToShow: 3,
        nextArrow: '.next',
        prevArrow: '.prev',
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
    // heart
    $('.heart').click(function (e) {
        if ($(this).children('i').hasClass('far')) {
            $(this).children('i').removeClass('far').addClass('fas');
            $(this).css("background", "white");
            $(this).css("color", "red");
        } else {
            $(this).children('i').removeClass('fas').addClass('far');
            $(this).css("color", "");
            $(this).css("background", "");
        }


    });
    $('.heartart').click(function (e) {
        if ($(this).children('i').hasClass('far')) {
            $(this).children('i').removeClass('far').addClass('fas');
            $(this).css("background", "white");
            $(this).css("color", "red");
        } else {
            $(this).children('i').removeClass('fas').addClass('far');
            $(this).css("color", "");
            $(this).css("background", "");
        }


    });
    $('#selectdate').click(function () {
        $('#selectdate i').css("display", "none");
    });
    $('#lastdon').click(function () {
        $('#lastdon i').css("display", "none");
    });
    

});