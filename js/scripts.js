$(function() {
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }
        */

       /*
       if (listaMenu.is(':hidden') == true) {
           listaMenu.css('display','block');
       }else{
           listaMenu.css('display','none');
       }
       */

        if (listaMenu.is(':hidden') == true) {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-window-close');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-window-close');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }

    });

    if($('target').length > 0){
        //O elemento existe, portanto precisamos dar o scroll em algum elemento.
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll},2000);
    }

})