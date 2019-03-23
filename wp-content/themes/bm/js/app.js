jQuery(document).ready(function($) {
       //esse evento acontece quando toda a página é carregada
       window.addEventListener('load', function(){
	});
	// Focus styles for menus when using keyboard navigation  
	// Properly update the ARIA states on focus (keyboard) and mouse over events
	$( '[role="menubar"]' ).on( 'focus.aria  mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', true );
	  } );
	
	  // Properly update the ARIA states on blur (keyboard) and mouse out events
	  $( '[role="menubar"]' ).on( 'blur.aria  mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', false );
	  } );
	$('.fechar-menu').on('click', function(){
		$('#menu-mob-flutuante').fadeOut(200);
	});

	$('.menu-mob').on('click', function(){
		$('#menu-mob-flutuante').fadeIn(200);
	})

	$('.link-topo').on('click', function(){
		$('.link-topo').removeClass('ativo');
		$(this).addClass('ativo');
		$('#menu-mob-flutuante').fadeOut(200);
	})
});
