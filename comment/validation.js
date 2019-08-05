$(document).ready(function () {

    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your title..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#country').val() || $('#country').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Country..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#comment').val() || $('#comment').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Comment",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#captchacode').val() || $('#captchacode').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the captcha code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "comment/comment.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {

                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Security code is invalid",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        $('#myReview').modal('hide');
                        swal({
                            title: "Success.!",
                            text: "Thank For You..! Your comment has been Active in few minutes.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        return false;
    });

});

