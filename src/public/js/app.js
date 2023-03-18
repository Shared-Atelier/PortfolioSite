// import './bootstrap';


// Contact-form-modal

$(function(){

  $('#contact-show').click(function() {
    // $(this).blur();
    // if($('modal-overlay')[0]) $('modal-overlay').remove();
    // $('body').append('<div id="modal-overlay"></div>');
    // $('#modal-overlay').fadeIn('slow');
    $('#contact-modal').fadeIn('slow');
  });

  $('#modal-close').click(function() {
    $('#contact-modal').fadeOut('slow');
  })


  

  // Ready test
  // $(function() {
  //   alert('OK!');
  // });

});
