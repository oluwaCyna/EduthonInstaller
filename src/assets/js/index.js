$(document).ready(function() {
  // $('.env').hide()
  $('.data').hide()
  $('.app').hide()
  // $('.login').hide()
  $('.owner').hide()
  $('.info').hide()

  $('#env').click(function () {
    $('.env').show()
    $('.data').hide()
    $('.app').hide()
    $('#env').addClass('activetab')
    $('#database').removeClass('activetab')
    $('#appl').removeClass('activetab')
  });

  $('#next1').click(function () {
    $('.env').hide()
    $('.data').show()
    $('.app').hide()
    $('#env').removeClass('activetab')
    $('#database').addClass('activetab')
    $('#appl').removeClass('activetab')
  });

  $('#next2').click(function () {
    $('.env').hide()
    $('.data').hide()
    $('.app').show()
    $('#env').removeClass('activetab')
    $('#database').removeClass('activetab')
    $('#appl').addClass('activetab')
  });

  $('#movetoenv').click(function () {
    $('.env').show()
    $('.data').hide()
    $('.app').hide()
    $('#env').addClass('activetab')
    $('#database').removeClass('activetab')
    $('#appl').removeClass('activetab')
  });

  $('#movetodb').click(function () {
    $('.env').hide()
    $('.data').show()
    $('.app').hide()
    $('#env').removeClass('activetab')
    $('#database').addClass('activetab')
    $('#appl').removeClass('activetab')
  });

  $('#database').click(function () {
    $('.env').hide()
    $('.data').show()
    $('.app').hide()
    $('#env').removeClass('activetab')
    $('#database').addClass('activetab')
    $('#appl').removeClass('activetab')
  
  });
  $('#appl').click(function () {
    $('.env').hide()
    $('.data').hide()
    $('.app').show()
    $('#env').removeClass('activetab')
    $('#database').removeClass('activetab')
    $('#appl').addClass('activetab')
  
  });

// login page

  $('#login').click(function () {
    $('.login').show()
    $('.info').hide()
    $('.owner').hide()
    $('#login').addClass('activetab')
    $('#info').removeClass('activetab')
    $('#owner').removeClass('activetab')
  });
  $('#back1').click(function () {
    $('.login').show()
    $('.info').hide()
    $('.owner').hide()
    $('#login').addClass('activetab')
    $('#info').removeClass('activetab')
    $('#owner').removeClass('activetab')
  });

  $('#info').click(function () {
    $('.login').hide()
    $('.info').show()
    $('.owner').hide()
    $('#login').removeClass('activetab')
    $('#info').addClass('activetab')
    $('#owner').removeClass('activetab')
  });
  $('#next11').click(function () {
    $('.login').hide()
    $('.info').show()
    $('.owner').hide()
    $('#login').removeClass('activetab')
    $('#info').addClass('activetab')
    $('#owner').removeClass('activetab')
  });
  $('#back2').click(function () {
    $('.login').hide()
    $('.info').show()
    $('.owner').hide()
    $('#login').removeClass('activetab')
    $('#info').addClass('activetab')
    $('#owner').removeClass('activetab')
  });

  $('#owner').click(function () {
    $('.login').hide()
    $('.info').hide()
    $('.owner').show()
    $('#login').removeClass('activetab')
    $('#info').removeClass('activetab')
    $('#owner').addClass('activetab')
  });
  $('#next22').click(function () {
    $('.login').hide()
    $('.info').hide()
    $('.owner').show()
    $('#login').removeClass('activetab')
    $('#info').removeClass('activetab')
    $('#owner').addClass('activetab')
  });
});