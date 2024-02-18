/*==================== ALERT FOR DELETE USER ====================*/
$(document).on('click', '.delete_user_btn', function (e) {
  e.preventDefault();
  var id = $(this).val();
  // alert(id);
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        method: 'POST',
        url: 'code.php',
        data: {
          user_table: id,
          delete_user_btn: true,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'User Deleted Successfully!', 'success');
            $('#user_table').load(location.href + ' #user_table');
          } else if (response == 500) {
            swal('Error!', 'Something went Wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE NEWS & BLOG ====================*/
$(document).on('click', '.delete_blog_btn', function (e) {
  e.preventDefault();
  var id = $(this).val();
  // alert(id);
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        method: 'POST',
        url: 'code.php',
        data: {
          blog_table: id,
          delete_blog_btn: true,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'News & Blog Deleted Successfully!', 'success');
            $('#blog_table').load(location.href + ' #blog_table');
          } else if (response == 500) {
            swal('Error!', 'Something went Wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== FUNC FOR FEEDBACK PROCESS ====================*/
$(document).ready(function () {
  $('#feedback_form').submit(function (e) {
    e.preventDefault();
    var email = $('#email').val();
    if (!isValidEmail(email)) {
      alertify.error('Please enter a valid email address.');
      return false;
    }
    $.ajax({
      type: 'POST',
      url: 'functions/process_feedback.php',
      data: $(this).serialize(),
      success: function (response) {
        $('#feedback_form')[0].reset();
        alertify.success('Feedback submitted successfully!');
        setTimeout(function () {
          location.reload();
        }, 100000);
      },
      error: function (xhr, status, error) {
        alertify.error('Error submitting feedback.');
      },
    });
  });
});
function isValidEmail(email) {
  var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}
/*==================== FUNC FOR APPOINTMENT PROCESS ====================*/
$(document).ready(function(){
    $('#appointmentForm').submit(function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        console.log(formData); // Log the serialized data
        $.ajax({
            type: 'POST',
            url: 'functions/process_sched.php',
            data: formData,
            dataType: 'json',
            success: function(response){
                if (response.success) {
                    alertify.success(response.message);
                    $('#appointmentForm')[0].reset();
                } else {
                    alertify.error(response.message);
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText); // Log the error response
                alertify.error('Failed to schedule appointment. Please try again.');
            }
        });
    });
});