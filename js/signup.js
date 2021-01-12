//<!--Jin Qikai 19034275-->
$(document).ready(function() {
  $("input[type=text]").val("");
  $("input[type=email]").val("");
  $("input[type=date]").val("");
  $("input[type=number]").val("");
  $("#selGender").val("")

  $('input[type=password]').focus(function() {
    $('#message').show();
  });
  $('input[type=password]').blur(function() {
    $('#message').hide();
  });
  $("form").validate({
    rules: {
      username: {
        required: true
      }, email: {
        required: true
      }, password: {
        required: true
      }, confirmPassword: {
        equalTo: "#password"
      },  signupHeight: {
        min: 1,
        max: 2.2
      }, signupWeight: {
        min: 30,
        max: 400
      }, birthday: {
        required: true
      }
    },
    messages: {
      username: {
        required: "Please enter your username"
      }, email: {
        required: "Please enter your email"
      }, password: {
        required: "Please enter your password"
      }, confirmPassword: {
        equalTo: "Please enter the same password"
      }, signupHeight: {
        min: "Please enter a number more than 1",
        max: "Please enter a number less than 2.2"
      }, signupWeight: {
        min: "Please enter a number more than 30",
        max: "Please enter a number less tahn 400"
      }, birthday: {
        required: "Please enter a date"
      }
    },
    submitHandler: function() {
      return true;
    }
  });
  var dtToday = new Date();
  var month = dtToday.getMonth() + 1;
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();
  if(month < 10)
     month = '0' + month.toString();
  if(day < 10)
     day = '0' + day.toString();

  var maxDate = year + '-' + month + '-' + day;
  $('#date').attr('max', maxDate);

  $("input[type='checkbox']").click(function() {
    if ($("input[type='checkbox']:checked").length == 0) {
      $("input[type='checkbox']").removeAttr('disabled');
    } else {
      $("input[type='checkbox']:unchecked").attr('disabled', true);
    }
  });
});
// <!--Jin Qikai 19034275-->