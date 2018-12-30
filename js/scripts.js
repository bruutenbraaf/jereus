$( document ).ready(function() {
	jQuery( '.carousel-inner').find('.carousel-item:first' ).addClass( 'active' );
	
	

  $('select').niceSelect();
  
$('.widgettitle').click(function(e) {
	$(this).toggleClass('widget-show');
    $(this).next('.widget-content').slideToggle(300);
});

$('.maten-tabel-button').click(function(e) {
	$('.maten-tabel').toggleClass('toon-maten-tabel');
});
	
$('.close-tabel').click(function(e) {
	$('.maten-tabel').toggleClass('toon-maten-tabel');
});
	
setHeight($('.products > li'));

function setHeight(col) {
    var $col = $(col);

    var $maxHeight = 0;
    $col.each(function () {
        var $thisHeight = $(this).outerHeight();
        if ($thisHeight > $maxHeight) {
            $maxHeight = $thisHeight;
        }
    });
    $col.height($maxHeight);
}


setHeight($('.uitgelichte_producten_homepagina > li'));

function setHeight(col) {
    var $col = $(col);

    var $maxHeight = 0;
    $col.each(function () {
        var $thisHeight = $(this).outerHeight();
        if ($thisHeight > $maxHeight) {
            $maxHeight = $thisHeight;
        }
    });
    $col.height($maxHeight);
}

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $(".hoofd_menu").addClass("is_fixed");
    } else {
        $(".hoofd_menu").removeClass("is_fixed");
    }
});

$( ".m_button" ).click( function(event){
	$(".top_menu").delay(200).slideToggle('100');
	$('.top_bar .container .row .top_menu').toggleClass("open");	
		if ( $('.top_bar .container .row .top_menu').hasClass("open") ) {  	
			$(".user_menu").animate({ 'margin-top': "-100vh", 'opacity': "0"}), 100;	
			$(".top_bar .container .row").animate({ 'height': "100%"}), 100;
		}
	  	else {
	  		$(".user_menu").delay(300).animate({ 'margin-top': "0px", 'opacity': "1"}), 100;
	  		$(".top_bar .container .row").animate({ 'height': "44px"}), 100;
		}
  	});
  	
$( ".h_button" ).click( function(event){
	$(".hoofd_menu .container .row .categorieen").delay(200).slideToggle('100');
	$('.top_bar .container .row .top_menu').toggleClass("open");	
		if ( $('.top_bar .container .row .top_menu').hasClass("open") ) {  				
			$(".hoofd_menu .container .row").animate({ 'height': "100%"}), 100;	
		}
	  	else {
		}
  	});
});	

