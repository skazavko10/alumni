$( document ).ready(function() {
    if (document.documentElement.clientWidth > 769) {
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    }

    $('.navbar .dropdown-toggle').hover(function() {
        if (document.documentElement.clientWidth > 769) { $(this).addClass('disabled');}
        else { $(this).removeClass('disabled'); }
    });

    $('.edit-field').on('click', function(){
        var field = $(this).data('field-name');
        $('input[name='+field+']').prop('disabled', function(i, v) { return !v; });
        $( 'textarea[name='+field+']' ).prop('disabled', function(i, v) { return !v; });
    });

    $(".navbar-laravel #mobile-menu .cusbutton").on("click", function(event){       
        $('#overlay-slide').addClass('show-overlay');
        $('#spmenu').removeClass('starter-position');
        $('#spmenu').addClass('main-menu');
        $('#close-btn-holder').addClass('close-overlay');
    });

    $('#overlay-slide').on('click', function(){
        $('#overlay-slide').removeClass('show-overlay');
        $('#spmenu').removeClass('main-menu');
        $('#spmenu').addClass('starter-position');
        $('#close-btn-holder').removeClass('close-overlay');
    });

    $('#close-btn-holder').on('click', function(){
        $('#overlay-slide').removeClass('show-overlay');
        $('#spmenu').removeClass('main-menu');
        $('#spmenu').addClass('starter-position');
        $('#close-btn-holder').removeClass('close-overlay');
    });

    $('#overlay-slide').on('click', function(){
        $('#overlay-slide').removeClass('show-overlay');
        $('#spmenu').removeClass('main-menu');
        $('#spmenu').addClass('starter-position');
        $('#close-btn-holder').removeClass('close-overlay');

        $('#show-push').removeClass('open-menu');
        $('#show-push .menutextbottom').text('MENU');;
    });

    $('#show-push').on('click', function(){
        
        if( !$('.open-menu').length ) {
            menuBtnClick();
        }
        else {
            closeMenuBtnClick();
        }
    });


    function closeMenuBtnClick() {
        $('#overlay-slide').removeClass('show-overlay');
        $('#spmenu').removeClass('main-menu');
        $('#spmenu').addClass('starter-position');
        $('#close-btn-holder').removeClass('close-overlay');

        $('#show-push').removeClass('open-menu');
        $('#show-push .menutextbottom').text('MENU');
    }

    function menuBtnClick() {
        $('#overlay-slide').addClass('show-overlay');
        $('#spmenu').removeClass('starter-position');
        $('#spmenu').addClass('main-menu');
        $('#close-btn-holder').addClass('close-overlay');

        $('#show-push').addClass('open-menu');
        $('.open-menu .menutextbottom').text('CLOSE');
    }
});