    // <!-- Save Change -->
    $('#imageManager_saveChange').on('click', function(evt){
        evt.preventDefault();
        // Define selected image 
        var radio_checked = $("input:radio[name='example']:checked"); // Radio checked
        //
        $('.logo-image').attr('src', radio_checked.attr('data-image'));
        $('input[name=user_logo]').val(radio_checked.val());
        // Hide Modal
        $("#imageManager_modal").modal('hide'); 
    });


    // le viet
    $("#venue_name, #venue_type, #venue_location_1, #venue_location_2, #venue_address, #loc_map, #phone, #email, #website, #face, #google, #description").tooltip({
        placement : 'right',
        html : true,
        container : 'body'
    });