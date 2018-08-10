$( document ).ready(function() {
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
        $('#show-push .menutextbottom').text('MENU');
    });

    $('#show-push').on('click', function(){
        
        if( !$('.open-menu').length ) {
            menuBtnClick();
        }
        else {
            closeMenuBtnClick();
        }
    });

    /**/
    // 
    $('.notes-container .title h1').on('click', function(){

        if( $('.additional-section.' + this.className + '.show-additional-section').length ) {
            
            $('.additional-section.' + this.className).removeClass('show-additional-section');
            
            if( !$(this).closest('.notes-container').is(':last-child') ) {

                $('.' + this.className).parent('.title').css('border-bottom', '2px solid rgba(28, 53, 119)');
                $('.' + this.className).parent('.notes-container').find('.expand').css('border-bottom', '2px solid rgba(28, 53, 119)');
                $('.' + this.className).parent('.notes-container').next().css('border-top', 'none');
            }
        }
        else {
            
            $('.additional-section.' + this.className).addClass('show-additional-section');
            
            if( !$(this).closest('.notes-container').is(':last-child') ) {
                
                $('.' + this.className).parent('.title').css('border-bottom', 'none');
                $('.' + this.className).parent('.notes-container').find('.expand').css('border-bottom', 'none');
                $('.' + this.className).parent('.notes-container').next().css('border-top', '2px solid rgba(28, 53, 119)');
            }
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