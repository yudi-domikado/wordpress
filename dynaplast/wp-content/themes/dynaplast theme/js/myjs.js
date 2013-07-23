$(document).ready(function(){
    var container = $('.wrapperblock-career');
    var elements = container.children('.block-career');
    var oldWrapPos = 0;
    var oldSelectedPos = 0;

    $('.block-career a').click(function(){
        container.children().removeClass('selected'); // reset selected element
        $(this).addClass('selected'); // mark new selected element
        var selectedPos = $(this).index(); // get selected position
        // find wrap element:
        //var containerWidth = container.width();
        //var elementsInRow = Math.floor(containerWidth / 100 );
        var elementsInRow = 4; // use this if container's width is fixed
        var row = Math.floor(selectedPos / elementsInRow)+1;
        var wrapPos = (row * elementsInRow);
        
        console.log('pos: '+selectedPos); // LOG
        console.log('row: '+row); // LOG
        
        // if selected is on last row, use as wrap the last element:
        var size = elements.length;
        if (wrapPos >= size){wrapPos = size;}
        wrapPos = wrapPos - 1;
        
        var pointerPos = 40 + ((selectedPos % elementsInRow) * 110)
        if (wrapPos == oldWrapPos){
            console.log('same row'); // LOG
            if (selectedPos == oldSelectedPos){
                console.log('same element'); // LOG
                elements.removeClass('edge');
                $('.info-bg').slideToggle();        
            } else {
                oldSelectedPos = selectedPos;
                $('.info-pc').css("left", pointerPos+'px');
            }
        } else {
            oldWrapPos = wrapPos;
            elements.removeClass('edge');
            $(elements[wrapPos]).addClass('edge');
            $('.info-bg').slideUp( function() { $(this).remove(); });
            console.log('elements length before: '+elements.length); // LOG
            $('.edge').after('<div class="info-bg"><div class="info-pc" style="left:'+pointerPos+'px"></div><div class="info-cl"></div></div>');
            console.log('elements length after: '+elements.length); // LOG
            $('.info-bg').slideDown();
        }
    });

    $('html').click( function (e) { 
        if ( e.target == this )
            $('.info-bg').slideUp( function() { $(this).remove(); });
    });
});