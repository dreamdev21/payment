$('#step1').hide();
$('#step1_continue_btn').attr('disabled','disabled');
$('#accept').prop('checked', false);
$('#privacy').prop('checked', false);
$('#age_check').prop('checked', false);
function showstep1() {
    $('#step1').show(1500);
    $('#step1').css('visibility','visible');
}

function check(element) {
    var cb1 = document.getElementById("accept");
    var cb2 = document.getElementById("privacy");
    var cb3 = document.getElementById("age_check");
    var sub = document.getElementById("step1_continue_btn");
    if (cb1.checked == true  &&  cb2.checked == true &&  cb3.checked == true)
        sub.disabled = false;
    else
        sub.disabled = true;
}

   
$( document ).ready( function () {
    $( "#signupForm1" ).validate( {
        rules: {
            address: {
                required: true
            },
            zipcode: {
                required: true,
                digits: true,
                rangelength: [2, 6]
            },
            district: "required",
            mapposition: "required",
            title: "required",
            description: "required",
            age: {
                required: true,
                digits: true,
                min: 18
            },
            firstname: "required",
            lastname: "required",
            phone: {
                required: true,
                digits:true,
                rangelength: [9, 12]
            },

            email: {
                required: true,
                email: true
            },
            accept: "required"
        },
        messages: {
            address: "Please enter your address",
            zipcode: "Please enter your valid zipcode",
            district: "Please enter your district",
            mapposition: "Please enter your Map Position",
            title: "Please enter your title",


            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            phone: "Please enter your valid phone number.It must be 9~12 digits.",
            email1: "Please enter a valid email address",
            accept: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents( ".col-lg-10" ).addClass( "has-feedback" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if ( !element.next( "span" )[ 0 ] ) {
                $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
            }
        },
        success: function ( label, element ) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if ( !$( element ).next( "span" )[ 0 ] ) {
                $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-lg-10" ).addClass( "has-error" ).removeClass( "has-success" );
            $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-lg-10" ).addClass( "has-success" ).removeClass( "has-error" );
            $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
        }
    } );
} );
