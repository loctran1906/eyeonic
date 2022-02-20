function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}

function btn_delete_click() {
    $('.btn-delete').on('click', function (event) {
        event.preventDefault();
        var data_url = $(this).data('src');
        Swal.fire({
            title: 'Bạn chắc chắn chứ?',
            text: "Sau khi xóa bạn sẽ không thể lấy lại dữ liệu này!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, chắc chắn xóa!'
        }).then((result) => {
            if (result.value) {
                // console.log(data_url);
                $.ajax({
                    url: data_url, // gửi ajax đến file result.php
                    type: "get", // chọn phương thức gửi là get
                    dateType: "json", // dữ liệu trả về dạng text
                    data: { // Danh sách các thuộc tính sẽ gửi đi
                        number: $('#number').val()
                    },
                    success: function (result) {
                        //$('#result').html(result);
                        console.log(result);
                        if (result == 'true') {
                            Swal.fire(
                                'Đã xóa!',
                                'Đã xóa thành công.',
                                'Thành công.'
                            )
                            $('.swal2-confirm').on('click', function () {
                                window.location.reload();
                            })

                        }

                    },
                    error: function (error) {
                        console.log(error);
                        if(error.responseJSON.message.includes('Integrity constraint violation')){
                            toastr.error('Có nội dung liên kết với đối tượng !', 'Có Lỗi Xảy Ra');
                        }else{
                            toastr.error('Không xóa được đối tượng !', 'Có Lỗi Xảy Ra');
                        }
                    }
                });

            }
        })
    });
}

function disable_input_number_scroll(){
    $('body').on('focus', 'input[type=number]', function (e) {
        $(this).on('wheel.disableScroll', function (e) {
            e.preventDefault()
        });
    });
    $('body').on('blur', 'input[type=number]', function (e) {
        $(this).off('wheel.disableScroll')
    });
}

$(document).ready(function () {
    disable_input_number_scroll();
    btn_delete_click();
});

// file manager standalone upload image function

(function( $ ){

    $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = $('#' + $(this).data('input'));
        var target_preview = $('#' + $(this).data('preview'));
        window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
            return encodeURI(item.url);
        }).join(',');

        // set the value of the desired input to image url
        target_input.val('').val(file_path).trigger('change');

        // clear previous preview
        target_preview.html('');

        // set or change the preview image src
        items.forEach(function (item) {
            target_preview.append(
            $('<img>').css('height', '5rem').attr('src', encodeURI(item.thumb_url))
            );
        });

        // trigger change event
        target_preview.trigger('change');
        };
        return false;
     });
    }

})(jQuery);

(function( $ ){

    $.fn.filemanagerspecfolder = function(type, options,default_folder) {
    type = type || 'file';

    this.on('click', function(e) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = $('#' + $(this).data('input'));
        var target_preview = $('#' + $(this).data('preview'));
        window.open(route_prefix + '?type=' + type + '&defaultPath=' + default_folder , 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
            return item.url;
        }).join(',');

        // set the value of the desired input to image url
        target_input.val('').val(file_path).trigger('change');

        // clear previous preview
        target_preview.html('');

        // set or change the preview image src
        items.forEach(function (item) {
            target_preview.append(
            $('<img>').css('height', '5rem').attr('src', item.thumb_url)
            );
        });

        // trigger change event
        target_preview.trigger('change');
        };
        return false;
     });
    }

})(jQuery);