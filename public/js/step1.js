$('#step1').hide();
$('#step1_continue_btn').attr('disabled','disabled');
$('#accept').prop('checked', false);
$('#privacy').prop('checked', false);
function showstep1() {
    $('#step1').show(1500);
    $('#step1').css('visibility','visible');
}

function check(element) {
    var cb1 = document.getElementById("accept");
    var cb2 = document.getElementById("privacy");
    var sub = document.getElementById("step1_continue_btn");
    if (cb1.checked == true  &&  cb2.checked == true)
        sub.disabled = false;
    else
        sub.disabled = true;
}
