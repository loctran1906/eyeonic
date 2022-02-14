$(document).ready(function () {
  $('.slider').slick({
    slidesToShow: 1,
    fade: true,
    dot: false,
    nav: true
  })
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  })
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    focusOnSelect: true,
    centerMode: true
  })
  $('.nav-link-collapse').on('click', function () {
    $('.nav-link-collapse')
      .not(this)
      .removeClass('nav-link-show')
    $(this).toggleClass('nav-link-show')
  })

  // phân trang
  $('#datapagi').after(
    '<nav aria-label="Page navigation example" class="datapagi flex-center"></nav>'
  )
  var rowsShown = 9
  var rowsTotal = $('#datapagi .col-sm-4').length
  var numPages = rowsTotal / rowsShown
  for (i = 0; i < numPages; i++) {
    var pageNum = i + 1
    $('.datapagi').append(
      '<ul class="pagination"><li class="page-item"><a class="page-link" href="#" rel="' +
        i +
        '">' +
        pageNum +
        '</a></li></ul>'
    )
  }
  $('#datapagi .col-sm-4').hide()
  $('#datapagi .col-sm-4')
    .slice(0, rowsShown)
    .show()
  $('.datapagi ul li a:first').addClass('active')
  $('.datapagi ul li a').bind('click', function () {
    $('.datapagi a').removeClass('active')
    $(this).addClass('active')
    var currPage = $(this).attr('rel')
    var startItem = currPage * rowsShown
    var endItem = startItem + rowsShown
    $('#datapagi .col-sm-4')
      .css('opacity', '0.0')
      .hide()
      .slice(startItem, endItem)
      .css('display', 'table-row')
      .animate({ opacity: 1 }, 300)
  })
  var q = ''
  var linkKey =
    'https://www.google.com/maps/embed/v1/search?key=AIzaSyBK73HewkhHBVVs9nI98-HY_N7cZM_kdjE'
  var zoom = 12
  var defaultLoc = '421,Ngoc Thuy, Long Bien, Ha Noi'

  //Get users geolocation
  if (navigator.geolocation) {
    q = navigator.geolocation.getCurrentPosition(
      handleGetCurrentPosition,
      onError
    )

    function handleGetCurrentPosition (location) {
      location.coords.latitude
      location.coords.longitude
    }

    function onError () {
      q = defaultLoc
    }
  }

  //Set initial map based on user geolocation or NY, NY
  var srcContent = linkKey + '&q=' + q + '&zoom=' + zoom
  $('#map-canvas').attr('src', srcContent)

  //Change map based on user input in textbox and a click or enter key submission.
  $(function () {
    $('#submit').on('keypress click', function (e) {
      if ($('#address').val().length === 0) {
        q = defaultLoc
      } else {
        q = $('#address').val()
      }
      srcContent = linkKey + '&q=' + q + '&zoom=' + zoom
      if (e.which === 13 || e.type === 'click') {
        $('#map-canvas').attr('src', srcContent)
      }
    })
  })
})
