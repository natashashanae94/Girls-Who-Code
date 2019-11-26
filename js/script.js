/*
 * GETINVOLVED.PHP FORM VALIDATION.
 * validates form on the client-side using jquery.
 * 
 **/

//Waiting until document fully loads
$(document).ready(function () {

    //When user submits the form. . .
    $('.signup_form').submit(function (e) {

        //Creating variables to store input value.
        var first_name = $('.firstName').val();
        var last_name = $('.lastName').val();
        var nameCheck = /^[a-zA-Z '-]+$/;
        var address = $('.address').val();
        var addressCheck = /^[a-zA-Z0-9 '-]+$/;
        var city = $('.city').val();
        var cityCheck = /^[a-zA-Z '-.]+$/;
        var state = $('.state').val();
        var zip = $('.zip').val();
        var zipReg = /^\d{5}(?:[\s-]\d{4})?$/;
        var phone = $('.phone').val();
        var phoneReg = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        var email = $('.email').val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var role = $('.gwc_role').val();
        var experience = $('.experience').val();
        var education = $('.education').val();

        var errors = false;

        $(".error").remove();

      //Check to see if user filled out the form
        if (first_name.length < 1) {
            $('.firstName').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!nameCheck.test(first_name)) {
            $('.firstName').after('<span class="error">Name not valid</span>');
            errors = true;
        }

        if (last_name.length < 1 ) {
            $('.lastName').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!nameCheck.test(last_name)) {
            $('.lastName').after('<span class="error">Name not valid</span>');
            errors = true;
        }

        if (address.length < 1) {
            $('.address').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!addressCheck.test(address)) {
            $('.address').after('<span class="error">*Invalid address</span>');
            errors = true;
        }

        if (city.length < 1) {
            $('.city').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!cityCheck.test(city)) {
            $('.city').after('<span class="error">Name not valid</span>');
            errors = true;
        }

        if (state == "-Please Select-") {
            $('.state').after('<span class="error">*This field is required</span>');
            errors = true;
        }

        if (zip.length < 1) {
            $('.zip').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!zipReg.test(zip)) {
            $('.zip').after('<span class="error">Zipcode not valid</span>');
            errors = true;
        }

        if (phone.length < 1) {
            $('.phone').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!phoneReg.test(phone)) {
            $('.phone').after('<span class="error">Phone number not valid</span>');
            errors = true;
        }

        if (email.length < 1) {
            $('.email').after('<span class="error">*This field is required</span>');
            errors = true;
        } else if (!pattern.test(email)) {
            $('.email').after('<span class="error">Email not valid</span>');
            errors = true;
        }

        if (role == "-Please Select-") {
            $('.gwc_role').after('<span class="error">*This field is required</span>');
            errors = true;
        }

        if (experience == "-Please Select-") {
            $('.experience').after('<span class="error">*This field is required</span>');
            errors = true;
        }

        if (education == "-Please Select-") {
            $('.education').after('<span class="error">*This field is required</span>');
            errors = true;
        }

        if (errors == true) {
            $('.submit_btn').after('<span class="error">**Failed to submit. Please check the form.')
            return false;
        } else {
            return true;
        }

    });
});