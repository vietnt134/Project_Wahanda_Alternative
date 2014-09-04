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

var UserDetail = function (){
    var xhrUpdate_user_detail = function() {
        $('#user_detail_form').on('submit', function(){
            var loading = $('#user_detail_form > .loading');
            var done = $('#user_detail_form > .done');
            loading.fadeIn();
            done.hide();
            var url = URL . 'spaCMS/settings/xhrUpdate_user_detail';
            $.get(url, function(data) {
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
        });
    }

    return {
        init: function(){
            xhrUpdate_user_detail();
        }
    }
}();

// var UserDetail = function (){

//     return {
//         init: function(){
            
//         }
//     }
// }();


    // le viet
    $("#venue_name, #venue_type, #venue_location_1, #venue_location_2, #venue_address, #loc_map, #phone, #email, #website, #face, #google, #description").tooltip({
        placement : 'right',
        html : true,
        container : 'body'
    });