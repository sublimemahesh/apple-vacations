//--------------------------------------------------check one by one on blur--------------------------------------------------jQuery(document).ready(function () {        jQuery("#txtfullName").blur(function () {        validateEmpty("txtfullName", "spanfullName");    });     jQuery("#txttravelDate").blur(function () {        validateEmpty("txttravelDate", "spantravelDate");    });    jQuery("#txtnumAdults").blur(function () {        validateEmpty("txtnumAdults", "spannumAdults");    });       jQuery("#txtemail").blur(function () {        ValidateEmail("txtemail", "spanemail");    });     jQuery("#txtmobile").blur(function () {        validateEmpty("txtmobile", "spanmobile");    });          jQuery("#txtmessage").blur(function () {        validateEmpty("txtmessage", "spanmessage");    });    jQuery("#captChacode").blur(function () {        validateEmpty("captChacode", "capSpan");    });    jQuery("#btnSubmit_2").bind('click', function () {        if (!validate_1()) {            return;        }        jQuery("#checking").show();        sendForm();    });    jQuery('.input-validater').keypress(function (e) {        if (e.keyCode == 13) {            if (!validate_1()) {                return;            }            jQuery("#checking").show();            sendForm();        }    });});//--------------------------------------------------function to check button click --------------------------------------------------function validate_1() {    if (            validateEmpty("txtfullName", "spanfullName") &            ValidateEmail("txtemail", "spanemail") &              validateEmpty("txttravelDate", "spantravelDate") &             validateEmpty("txtmobile", "spanmobile") &            validateEmpty("txtmessage", "spanmessage") &            validateEmpty("captChacode", "capSpan")            )    {        return true;    } else {        return false;    }}//--------------------------------------------------Ajax call --------------------------------------------------function sendForm() {    jQuery.ajax({        url: "contact-form/send-email.php",        cache: false,        dataType: "json",        type: "POST",        data: {            captChacode: jQuery('#captChacode').val(),            visitor_name: jQuery('#txtfullName').val(),            visitor_email: jQuery('#txtemail').val(),             visitor_travel_date: jQuery('#txttravelDate').val(),                        visitor_mobile: jQuery('#txtmobile').val(),                        message: jQuery('#txtmessage').val()        },        success: function (html) {            var status = html.status;            var msg = html.msg;            if (status == "incorrect") {                jQuery("#capSpan").addClass("notvalidated");                jQuery("#capSpan").html(msg);                jQuery("#capSpan").show();                jQuery("#checking").fadeOut(2000);            } else if (status == "correct") {                jQuery("#checking").hide();                jQuery("#dismessage").html(msg).delay(1000).show(1000);                jQuery('#captChacode').val("");                jQuery('#txtfullName').val("");                jQuery('#txtemail').val("");                jQuery('#txtahone').val("");                               jQuery('#txtSubject').val("");                jQuery('#txtMessage').val("");            }        }    });}//-----------------   function to check empty -------------------------------------------------------function validateEmpty(field, validatorspan){    if (jQuery('#' + field).val().length != 0)    {        jQuery('#' + validatorspan).addClass("validated");        jQuery('#' + validatorspan).removeClass("notvalidated");        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);        jQuery('#' + validatorspan).text("");        return true;    } else    {        jQuery('#' + validatorspan).addClass("notvalidated");        jQuery('#' + validatorspan).removeClass("validated");        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);        jQuery('#' + validatorspan).text("This field can not be empty");        return false;    }}//--------------------------------------------------function to check email--------------------------------------------------function ValidateEmail(field, validatordiv){    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;    if (jQuery('#' + field).val().match(mailformat))    {        jQuery('#' + validatordiv).addClass("validated");        jQuery('#' + validatordiv).removeClass("notvalidated");        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);        jQuery('#' + validatordiv).text("");        return true;    } else    {        jQuery('#' + validatordiv).addClass("notvalidated");        jQuery('#' + validatordiv).removeClass("validated");        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");        return false;    }}