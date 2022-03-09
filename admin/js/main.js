function handle_reload_script () {
  $('.btn-close-item').on('click', function (e) {
    e.preventDefault()
    var parent = $(this).parents('.banner-box')
    console.log(parent)
    $(this)
      .parents('.list-banner-item')
      .remove()
    parent.find('.list_banner').change()
  })
}
$(document).ready(function () {
  tinymce.init({
    selector: 'textarea#description123, textarea#detail',
    height: 500,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar:
      'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | help',
    content_style:
      'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  })
  //load img
  function readURL (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader()
      reader.onload = function (e) {
        $('#image-preview').attr('src', e.target.result)
        $('#image-preview').hide()
        $('#image-preview').fadeIn(650)
      }
      reader.readAsDataURL(input.files[0])
    }
  }

  $('#imagename').change(function () {
    readURL(this)
  })
  //banner home

  handle_reload_script()

  $('.list_banner').on('change', function (e) {
    e.preventDefault()
    var data_list = []
    $('.list_banner')
      .find('.list-banner-item')
      .each(function (index, value) {
        var self = $(this)
        self.find('.title-collapse').attr('data-key', index)
        self
          .find('.title-collapse')
          .attr('data-target', '#collapseBanner_' + index)
        self.find('.title-collapse').text('Banner Item ' + (index + 1))
        self.find('.collapse').attr('id', 'collapseBanner_' + index)
        self.find('.btn_banner_image').attr('data-input', 'thumbnail_' + index)
        self.find('.thumbnail_text').attr('id', 'thumbnail_' + index)
        // set data to list_banner
        let object_banner = {
          title1: self.find('.title1').val(),
          title2: self.find('.title2').val(),
          link: self.find('.link').val(),
          text_link: self.find('.text_link').val(),
          image_banner: self.find('.thumbnail_text').val()
        }
        data_list.push(object_banner)
      })
    $('.list_banner').attr('data-list-banner', JSON.stringify(data_list))
    $('.list_banner')
      .find('input[name="lst_banner"]')
      .val(JSON.stringify(data_list))
    handle_reload_script()
  })

  $('.add_banner_item').on('click', function (e) {
    e.preventDefault()
    let self = $(this)
    let data_clone = self
      .parents('.banner-box')
      .find('.data_banner_clone .list-banner-item')
      .clone()
    data_clone.appendTo(self.parents('.banner-box').find('.list_banner'))
    self
      .parents('.banner-box')
      .find('.list_banner')
      .change()
    handle_reload_script()
  })
})
