$( document ).ready(function() {
	jQuery( '.carousel-inner').find('.carousel-item:first' ).addClass( 'active' );
	
	
	
	
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
  
});	

