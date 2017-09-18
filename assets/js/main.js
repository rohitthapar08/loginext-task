$(document).ready(function() {
  $('#fullpage').fullpage({
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['First', 'Second', 'Third']
  });
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:50,
    nav:true
  })
});

$("#demo_form").validate({
  rules: {
    fnm: "required",
    lnm: "required",
    ph: "required",
    country: "required",
    ml: {
      required: true,
      email: true
    },
    demo_subject: "required",
    demo_msg: "required"
  },
  submitHandler: function(form) {
    $.ajax({
      method:'POST',
      url:'controller/demo.php',
      data: $(form).serialize(),
      success:function(d){
        res = JSON.parse(d);
        $('#demo_notify').html(res.msg);
        setTimeout(function(){
          if(res.status == 'success'){
            $('#demo_form_modal').modal('toggle');
          }
        },1500);
      }
    });
  }
});

$("#login_form").validate({
  rules: {
    usr: "required",
    pwd: "required"
  },
  submitHandler: function(form) {
    $.ajax({
      method:'POST',
      url:'controller/login.php',
      data: $(form).serialize(),
      success:function(d){
        res = JSON.parse(d);
        console.log(res);
        $('#login_notify').html(res.msg);
        setTimeout(function(){
          if(res.status == 'success'){
            $('#login_modal').modal('toggle');
            window.location = 'views/admin.php';
          }
        },1500);
      }
    });
  }
});
