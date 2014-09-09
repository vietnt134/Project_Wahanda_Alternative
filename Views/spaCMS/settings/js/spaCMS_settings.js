// le viet
$("#venue_name, #venue_type, #venue_location_1, #venue_location_2, #venue_address, #loc_map, #phone, #email, #website, #face, #google, #description").tooltip({
    placement : 'right',
    html : true,
    container : 'body'
});

var ImageManager = function () {
    return {
        init: function() {
            $('#iM_user_logo').click(function(){
                $('#imageManager_saveChange').attr('cover_id','user_logo');
            });

            $('#iM_user_slide').click(function(){
                $('#imageManager_saveChange').attr('cover_id','user_slide');
            });

            // <!-- Save Change -->
            $('#imageManager_saveChange').on('click', function(evt){
                evt.preventDefault();
                // Define position insert to image
                var cover_id = $(this).attr('cover_id');
                // Define selected image 
                var radio_checked = $("input:radio[name='iM-radio']:checked"); // Radio checked
                //
                $('#' + cover_id + '_thumbnail').attr('src', radio_checked.attr('data-image'));
                $('input[name=' + cover_id + ']').val(radio_checked.val());

                // Hide Modal
                $("#imageManager_modal").modal('hide'); 
            });

        }
    }
}();

var GetMoreInfo = function () {
    var xhrGet_type_business = function() {
        var url = URL + 'spaCMS/settings/xhrGet_type_business';
        var options_type_business = '';
        $.get(url, function(data){
            $.each(data, function(index, value){
                options_type_business += '<option value="' + value['type_business_id'] + '">' + value['type_business_name'] + '</option>';
            });
            //
            $('#user_type_business_id').html(options_type_business);
        }, 'json');
    }

    var xhrGet_country = function() {
        var url = URL + 'spaCMS/settings/xhrGet_country';
        var options_country = '';
        $.get(url, function(data){
            $.each(data, function(index, value){
                options_country += '<option value="' + value['country_id'] + '">' + value['country_name'] + '</option>';
            });
            //
            $('#user_country_id').html(options_country);
            $('#user_company_country_id').html(options_country);
        }, 'json');
    }

    return {
        init: function() {
            xhrGet_type_business();
            xhrGet_country();
        }
    }
}();

var UserDetail = function (){

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

            $('#user_logo_thumbnail').attr('src', url_thumbnail);
            $('input[name=user_logo]').val(data[0]['user_logo']);
            $('input[name=user_business_name]').val(data[0]['user_business_name']);
            $('textarea[name=user_address]').val(data[0]['user_address']);
            $('input[name=user_phone]').val(data[0]['user_phone']);
            $('input[name=user_facebook]').val(data[0]['user_facebook']);
            $('input[name=user_website]').val(data[0]['user_website']);
            $('input[name=user_googleplus]').val(data[0]['user_googleplus']);
            $('input[name=user_email]').val(data[0]['user_email']);
            $('textarea[name=user_description]').val(data[0]['user_description']);
            $('select[name=user_country_id]').val(data[0]['user_country_id']);
            $('select[name=user_type_business_id]').val(data[0]['user_type_business_id']);
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

            $.post(url, data, function(result) {
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
            return false;
        });
    }

    var xhrGet_user_is_use_voucher = function () {
        var url = URL + 'spaCMS/settings/xhrGet_user_is_use_voucher';
        $.get(url, function(data){
            if(data){
                $('input[name=user_is_use_voucher]').attr('checked', true);
            } else {
                $('input[name=user_is_use_voucher]').attr('checked', false);
            }
            
        }, 'json');
    }

    var xhrUpdate_user_is_use_voucher = function () {
        $('#user_is_use_voucher_form').on('submit', function(){
            var data = $(this).serialize();
            var loading = $(this).find('.loading');
            var done = $(this).find('.done');
            loading.fadeIn();
            done.hide();
            console.log(data);
            var url = URL + 'spaCMS/settings/xhrUpdate_user_is_use_voucher';
            $.post(url, data, function(result) {
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
            return false;
        });
    }

    return {
        init: function(){
            xhrGet_user_detail();
            xhrUpdate_user_detail();
            xhrGet_user_is_use_voucher();
            xhrUpdate_user_is_use_voucher();
        }
    }
}();


var UserOpenHour = function (){
    var xhrGet_user_open_hour = function() {
        var url = URL + 'spaCMS/settings/xhrGet_user_open_hour';
        $.get(url, function(data){
            var status = null;
            var checked = null;
            var disabled = null;
            var selected = null;
            var open_hour = null;
            var close_hour = null;
            var option_open_hour = '';
            var option_close_hour = '';

            var out_html = '<li class=":status">';
                out_html += '<div>';
                out_html += '<input type="checkbox" :checked id=":day">';
                out_html += '<label for=":day">:day</label>';
                out_html += '<select :disabled name="user_open_hour_from[:day]">';
                out_html += ':option_open_hour';
                out_html += '</select> - ';
                out_html += '<select :disabled name="user_open_hour_to[:day]">';
                out_html += ':option_close_hour';
                out_html += '</select>';
                out_html += '</div>';
                out_html += '</li>';

            var weekly = $('#opening-hours ul.week');
            $.each(data, function(day, hour){
                open_hour = hour[1];
                close_hour = hour[2];

                if(hour[0] == 0) {
                    status  = 'off';
                    checked = '';
                    disabled = 'disabled="disabled"';
                } else {
                    status  = 'on';
                    checked = 'checked="checked"';
                    disabled = '';
                }

                var out = out_html.replace(':status', status);
                    out = out.replace(/:checked/g, checked);
                    out = out.replace(/:disabled/g, disabled);
                    out = out.replace(/:day/g, day);

                    for (var i = 0; i < 24; i++) {
                        if(i == open_hour) {
                            selected = 'selected="selected"';
                        } else {
                            selected = null;
                        }

                        if(i<10) {
                            option_open_hour += '<option '+selected+' value="'+i+'">0'+i+':00</option>';
                        }
                        if(i>10) {
                            option_open_hour += '<option '+selected+' value="'+i+'">'+i+':00</option>';
                        }
                    }

                    for (var i = 0; i < 24; i++) {
                        if(i == close_hour) {
                            selected = 'selected="selected"';
                        } else {
                            selected = null;
                        }

                        if(i<10) {
                            option_close_hour += '<option '+selected+' value="'+i+'">0'+i+':00</option>';
                        }
                        if(i>10) {
                            option_close_hour += '<option '+selected+' value="'+i+'">'+i+':00</option>';
                        }
                    }
                    out = out.replace(':option_open_hour', option_open_hour);
                    out = out.replace(':option_close_hour', option_close_hour);

                weekly.append(out);
            });
        }, 'json');
    }

    var xhrUpdate_user_open_hour = function() {
       $('#user_open_hour_form').on('submit', function(){
            var data = $(this).serialize();
            var loading = $(this).find('.loading');
            var done = $(this).find('.done');
            loading.fadeIn();
            done.hide();
            // console.log(data);
            var url = URL + 'spaCMS/settings/xhrUpdate_user_open_hour';

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
            xhrGet_user_open_hour();
            xhrUpdate_user_open_hour();
        }
    }
}();


var UserFinance = function (){
    var xhrGet_user_company = function () {
        var url = URL + 'spaCMS/settings/xhrGet_user_company';
        $.get(url, function(data){
            $('input[name=user_company_name]').val(data[0]['user_company_name']);
            $('input[name=user_company_delegate]').val(data[0]['user_company_delegate']);
            $('textarea[name=user_company_address]').val(data[0]['user_company_address']);
            $('input[name=user_company_tax_code]').val(data[0]['user_company_tax_code']);
            $('select[name=user_company_country_id]').val(data[0]['user_company_country_id']);
            $('input[name=user_contact_name]').val(data[0]['user_contact_name']);
            $('input[name=user_contact_email]').val(data[0]['user_contact_email']);
            $('input[name=user_contact_phone]').val(data[0]['user_contact_phone']);
            $('input[name=user_contact_role]').val(data[0]['user_contact_role']);
        }, 'json');
    }

    var xhrUpdate_user_company = function () {
        $('#user_company_form').on('submit', function(){
            var data = $(this).serialize();
            var loading = $(this).find('.loading');
            var done = $(this).find('.done');
            loading.fadeIn();
            done.hide();
            // console.log(data);
            var url = URL + 'spaCMS/settings/xhrUpdate_user_company';
            $.get(url, data, function(result) {
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
            return false;
        });
    }

    var xhrGet_user_bank_acc = function () {
        var url = URL + 'spaCMS/settings/xhrGet_user_bank_acc';
        $.get(url, function(data){
            $('input[name=user_bank_acc_owner]').val(data[0]['user_bank_acc_owner']);
            $('input[name=user_bank_acc]').val(data[0]['user_bank_acc']);
            $('textarea[name=user_bank_address]').val(data[0]['user_bank_address']);
            $('input[name=user_bank_branch]').val(data[0]['user_bank_branch']);
            $('input[name=user_bank_name]').val(data[0]['user_bank_name']);
        }, 'json');
    }

    var xhrUpdate_user_bank_acc = function () {
        $('#user_bank_acc_form').on('submit', function(){
            var data = $(this).serialize();
            var loading = $(this).find('.loading');
            var done = $(this).find('.done');
            loading.fadeIn();
            done.hide();
            // console.log(data);
            var url = URL + 'spaCMS/settings/xhrUpdate_user_bank_acc';
            $.get(url, data, function(result) {
                loading.fadeOut();
                done.fadeIn();
            }, 'json');
            return false;
        });
    }

    return {
        init: function(){
            xhrGet_user_company();
            xhrUpdate_user_company();
            xhrGet_user_bank_acc();
            xhrUpdate_user_bank_acc();
        }
    }
}();


// var UserDetail = function (){

//     return {
//         init: function(){
            
//         }
//     }
// }();


GetMoreInfo.init();
UserDetail.init();
UserOpenHour.init();
UserFinance.init();


ImageManager.init();