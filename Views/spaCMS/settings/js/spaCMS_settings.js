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