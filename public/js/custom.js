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
    })
});