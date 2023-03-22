var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }

// Document is ready
$(document).ready(function () {
    // Validate Username
    $("#usercheck").hide();
    $("#lastcheck").hide();
    $('#phonecheck').hide();
    $("#emailcheck").hide();
    $("#countrycount").hide();
    let firstnameError = true;
    let lastnameError = true;
    let phoneError = true;
    let emailError = true;
    $("#firstname").keyup(function () {
        validateUsername();
    });
    $("#lastname").keyup(function () {
        validateLastname();
    });
    $("#phone").keyup(function () {
        validatePhone();
    });
    $("#email").keyup(function () {
        validateEmail();
    });

    $('#firstname').keypress(function (e) {    
        var charCode = (e.which) ? e.which : e.keyCode    
        if (String.fromCharCode(charCode).match(/[^A-Za-z]/g))    
        return false;                        
    });

    $('#lastname').keypress(function (e) {    
        var charCode = (e.which) ? e.which : e.keyCode    
        if (String.fromCharCode(charCode).match(/[^A-Za-z]/g))    
        return false;                        
    });

    $('#phone').keypress(function (e) {    
        var charCode = (e.which) ? e.which : e.keyCode    
        if (String.fromCharCode(charCode).match(/[^0-9]/g))    
        return false;                        
    });

    function validateUsername() {
        let firstnameValue = $("#firstname").val();
        if (firstnameValue.length == "") {
        $("#usercheck").show();
            firstnameError = false;
            return false;
        } else if (firstnameValue.length < 3 || firstnameValue.length > 10) {
        $("#usercheck").show();
        $("#usercheck").html("**length of firstname must be between 3 and 10");
            firstnameError = false;
            return false;
        } else {
            firstnameError = true;
            $("#usercheck").hide();
        }
    }

    function validateLastname() {
        let lastnameValue = $("#lastname").val();
        if (lastnameValue.length == "") {
            $("#lastcheck").show();
            lastnameError = false;
            return false;
        } else if (lastnameValue.length < 3 || lastnameValue.length > 10) {
            $("#lastcheck").show();
            $("#lastcheck").html("**length of lastname must be between 3 and 10");
            lastnameError = false;
            return false;
        } else {
            lastnameError = true;
            $("#lastcheck").hide();
        }
    }
    
    // Validate Email
    function validateEmail() {
        let emailValue = $("#email").val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (emailValue.length == "") {
            $("#emailcheck").show();
            emailError = false;
            return false;
        } else if (regex.test(emailValue) == false) {
            $("#emailcheck").show();
            $("#emailcheck").html("** Enter validate email");
            emailError = false;
            return false;
        } else {
            emailError = true;
            $("#emailcheck").hide();
        }
    }

    function validatePhone() {
        let phone = $("#phone").val();
        if (phone.length == "") {
            $("#phonecheck").show();
            phoneError = false;
            return false;
        } else if (phone.length != 10) {
            $("#phonecheck").show();
            $("#phonecheck").html("**length of phone nuber must be 10");
            phoneError = false;
            return false;
        } else {
            phoneError = true;
            $("#phonecheck").hide();
        }
    }
    
    // Submit button
    $("#submitbtn").click(function () {
        validateUsername();
        validateLastname();
        validatePhone();
        validateEmail();
        
        var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });
        if(val.length < 5 ){
            $("#countrycount").show();
            $("#countrycount").html("**Select atleast 5 countries");
            return false;
        }
        if ( firstnameError == true && lastnameError == true && emailError == true  && phoneError == true) 
        {
            return true;
        } else {
            return false;
        }
    });
});    