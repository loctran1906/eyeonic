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
})
