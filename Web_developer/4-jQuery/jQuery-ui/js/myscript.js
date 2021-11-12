$(document).ready(function(){

    $('#draggable').draggable();
    $('#draggable_x').draggable({ axis:"x" });
    $('#draggable_y').draggable({ axis:"y" });
    $('#draggable_in_box').draggable( {containment:"#in_box"});
    $('#draggable_in_parent').draggable( {containment:"parent"} );
    $('#resizable').resizable({
        resize: function(event,ui){
            if ( $('#resizable').width() > 200 ) {
                alert('size width 200px or above');
            }
                
        }
    });
    $('#draggable_div').draggable();
    $('#droppable_div').droppable({
        drop: function( event,ui ){
            alert('Dropped!!!');
        }
    });

    $('#small_box').draggable();
    $('#big_box').droppable({
        drop: function(event,ui){
            alert('small box is droped on big box, your job is done.')
        }
    });

    $('#accordion').accordion();
    $('#sortable').sortable();
});