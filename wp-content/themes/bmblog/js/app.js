"use strict";
(function($){
    $('#loader').fadeOut(0);
    $('#busca').fadeOut(200);
    
    //slick
    $('#banner').slick({
        dots: true,
        infinite: false,
        speed: 1500,
        fade: true,
        arrows: true,
        focusOnSelect: false,
        pauseOnFocus: false,
        autoplay: true,
        centerMode: true,
      });


    $('.goesTo, .link-footer').on('click', function (event) {
        console.log(this);
        var $anchor = $(this);

        $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top }, 1000, 'swing');

        // Outras AnimaÃ§Ãµes
        // linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce

    });

    function mostrarIrTopo(e){
        let btn = $('#ir-topo');
        let posY = e.currentTarget.scrollY
        if(posY > 800){
            $(btn).fadeIn(200);
        }
        else{
            $(btn).fadeOut(200);
        }
    }

    function mainMeunu(e){
        var header = $('#topo');
        let posY = e.currentTarget.scrollY
        if(posY > 30){
            $(header).addClass('pos-fixed');
        }
        else{
            $(header).removeClass('pos-fixed');
        }
    }

    function bannerSize(){
        var banner = $('#banners');
        var header = $('header').height();
        $(banner).css('min-height', window.innerHeight - header)
    }

    window.addEventListener('scroll', function(e){
        mainMeunu(e);
        mostrarIrTopo(e);
    });

    $('.fechar-menu').on('click', function(){
        $('#menu-mob-flutuante').fadeOut(200);
    });

    $('.menu-mob').on('click', function(){
        $('#menu-mob-flutuante').fadeIn(200);
    });

    $('.link-topo').on('click', function(){
        $('.link-topo').removeClass('ativo');
        $(this).addClass('ativo');
        $('#menu-mob-flutuante').fadeOut(200);
    })
    
    
    //banner
    function banersHome(){
        $('.c-banner').height(innerHeight-($('#topo').height()));
    }
    //esse evento acontece quando toda a página é carregada
    window.addEventListener('load', function(){
        banersHome()
    });
    window.addEventListener('resize', function(){
        banersHome()
    });

    



    $( '[role="menubar"]' ).on( 'focus.aria  mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', true );
	} );

	// Properly update the ARIA states on blur (keyboard) and mouse out events
	$( '[role="menubar"]' ).on( 'blur.aria  mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', false );
    } );
    
    var local = window.location.pathname;
    $('.link_top').each(function(index, el){
        if(local === "/quem-somos"){
            $('#linkquemSomos').addClass('active');
            return false
        }
        if(local === "/produtos"){
            $('#linkprodutos').addClass('active');
            return false
        }
        if(local === "/glossario"){
            $('#linkglossario').addClass('active');
            return false
        }
        if(local === "/glossario"){
            $('#linkglossario').addClass('active');
            return false
        }
        if(local === "/cursos"){
            $('#linkCursos').addClass('active');
            return false
        }
        if(local === "/cursos"){
            $('#linkglossario').addClass('active');
            return false
        }
        if(local === "/fale-conosco"){
            $('#linkContato').addClass('active');
            return false
        }
        if(local === "/encontre"){
            $('#linkEncontre').addClass('active');
            return false
        }
    });
    

})($)