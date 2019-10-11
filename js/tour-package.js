$(function () {
    $(".datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: 'today',
    });

});
$(document).ready(function () {


    $('#price-change').change(function () {

        var pax_price = $(this).val();
        $('#pax-price').empty();

        $('#txtPax').val(pax_price);
        $('#pax-price').append(pax_price);

    });

    $('#check').click(function () {
        if (!$('#check-in').val() || $('#check-in').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the date..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {
            var check_date = $('#check-in').val();
            var price_change = $('#price-change').val();

            $('#date-check-in').empty();
            $('#pax-price').empty();

            $('#txtCheckIn').val(check_date);
            $('#date-check-in').append(check_date);
            $('#pax-price').append(price_change);
            $('#price-range-show').css("display", "block");
        }

    });

});