jQuery(document).ready(function($) {
       //esse evento acontece quando toda a página é carregada
       window.addEventListener('load', function(){
        $('#loader').fadeOut(200);
        $("#busca").hide();
        sameSize();
    });

    function fadeOutBusca(){
        $("#busca").fadeToggle(100);
    }

    $(".botao-procurar, .fechar-busca, .lupa").on("click", fadeOutBusca);
    $( "#busca" ).dblclick(fadeOutBusca);


    // mostra o menu desktop
    $('#menu-menu-topo .menu-item-has-children').on("mouseover", function(){
        $(this).children(".sub-menu").fadeIn(200);
    });
    $('#menu-menu-topo .menu-item-has-children').on("mouseleave", function(){
        $(this).children(".sub-menu").fadeOut(200);
    });

    $('.menu-mob > img').on('click',function(){
        $('#menu-mob-flutuante').removeClass('recuar');
    })

    $('#closeMob').on('click',function(){
        $('#menu-mob-flutuante').addClass('recuar');
    });

    $('#menu-principal-mobile > .menu-item').on('click', function(){
        $(this).children('.sub-menu').slideToggle(200);
    })
    // menu mobile
    window.addEventListener('resize', function(){
        sameSize()
    })

    // evento de scroll
    window.addEventListener('scroll', function(){
        var wY = window.scrollY;
        var header = document.getElementById('topo');
        if(wY > 120){
            $(header).addClass('pos-fixed');
        }
        else{
            $(header).removeClass('pos-fixed')
        }
    })

    // slicks  
    $('#banners').slick({
        dots: true,
        infinite: true,
        speed: 1500,
        fade: true,
        arrows: false,
        cssEase: 'linear',
        focusOnSelect: false,
        pauseOnFocus: false,
        autoplay: true,
        autoplaySpeed: 5000,
      });
      

      // mesmo tamanho na altura use a classe
      // .util-same-size

      function sameSize(){
        var list = $('.util-same-size');
        var bigger = 0;

        $(list).each(function(){            
            var itemSize = $(this).height();
            if(itemSize > bigger)
                bigger = itemSize
        })
        $(list).height(bigger + 10);
      }


});

