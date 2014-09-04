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
    var xhrGet_type_business = function() {
        var url = URL + 'spaCMS/settings/xhrGet_type_business';
        $.get(url, function(data){
            $.each(data, function(index, value){
                $('#user_type_business_id').append('<option value="' + value['type_business_id'] + '">' + value['type_business_name'] + '</option>');
            });
        }, 'json');
    }

    var xhrGet_country = function() {
        var url = URL + 'spaCMS/settings/xhrGet_country';
        $.get(url, function(data){
            $.each(data, function(index, value){
                $('#user_country_id').append('<option value="' + value['country_id'] + '">' + value['country_name'] + '</option>');
            });
        }, 'json');
    }

    var xhrGet_user_detail = function() {
        var url = URL + 'spaCMS/settings/xhrGet_user_detail';
        $.get(url, function(data){
            // get image thumbnail
            if(data[0]['user_logo'] != ""){
                var res = data[0]['user_logo'].split('/'); // chặt url ra
                var image_name = res[res.length - 1]; // lấy tên image
                res[res.length - 1] = "thumbnails"; // thay thế phần tên = "thumbnails"
                var thumbnail_name = image_name.split('.');
                thumbnail_name = thumbnail_name[0] + '_165x95.jpg';
                res[res.length] = thumbnail_name// chèn tên hình thumbnail vào cuối
                var url_thumbnail = res.join('/');// ghép lại thành url => url thumbnail
            }

            $('#user_logo_thubnail').val(url_thumbnail);
            $('input[name=user_logo]').val(data[0]['user_logo']);
            $('input[name=user_full_name]').val(data[0].user_full_name);
            $('textarea[user_address]').val(data[0]['user_address']);
            $('input[user_phone]').val(data[0]['user_phone']);
            $('input[user_facebook]').val(data[0]['user_facebook']);
            $('input[user_website]').val(data[0]['user_website']);
            $('input[user_googleplus]').val(data[0]['user_googleplus']);
            $('input[user_email]').val(data[0]['user_email']);
            $('input[user_description]').val(data[0]['user_description']);
            $('input[user_country_id]').val(data[0]['user_country_id']);
            $('input[user_type_business_id]').val(data[0]['user_type_business_id']);
        }, 'json');
    }

    var xhrUpdate_user_detail = function() {
        $('#user_detail_form').on('submit', function(){
            var data = $(this).serialize();
            var loading = $(this).find('.loading');
            var done = $(this).find('.done');
            loading.fadeIn();
            done.hide();
            var url = URL + 'spaCMS/settings/xhrUpdate_user_detail';

            $.get(url, data, function(result) {
                console.log(result);
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
            return false;
        });
    }

    return {
        init: function(){
            xhrGet_type_business();
            xhrGet_country();

            xhrGet_user_detail();
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