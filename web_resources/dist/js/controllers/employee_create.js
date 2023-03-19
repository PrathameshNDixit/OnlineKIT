var a = false;
$(document).ready(function () {
    $("#btn_save").click(function () {
        if (a == false) {

            saveperform();
        }
    });
});
function saveperform() {
    // var fullname = $('#fullname').val();


    // var emp_gender = $('#emp_gender').val();
    // var age = $('#age').val();
    // var emptype = $('#emptype').val();
    // var Cast = $('#Cast').val();
    // var sCast = $('#sCast').val();
    // var emp_qualification = $('#emp_qualification').val();
    // var department = $('#department').val();
    // var branch = $('#branch').val();
    // var pincode = $('#pincode').val();
    // var adharnumber = $('#adharnumber').val();
    // var phone = $('#phone').val();
    // var country = $('#country').val();
    // var state = $('#state').val();
    // var city = $('#city').val();
    var address = $('#Address').val();
    var dob = $('#DateOfBirth').val();
    var email = $('#Email').val();
    var pno = $('#PrimaryMobileNumber').val();
    var sno = $('#SecondaryMobileNumber').val();
    var dob = $('#DateOfBirth').val();
    if (email == "") {
        // alert("requird");
        swal({
            title: "",
            text: "Please Enter Required Fields",
            type: "error",
        });
    }
    else {
        a = true;
        //alert('insert');
        $.ajax({
            url: base_path + "Employee/insertEmployee",
            type: "POST",
            data: $('#Form').serialize(),
            beforeSend: function () {
                $('#btn_save').prop('disabled', true);
                $('#btn_save').html('Loading');
            },
            success: function (data) {

                $('#btn_save').prop('disabled', false);
                $('#btn_save').html('Save');
                $("#Form").trigger("reset");

                // alert("hi");
                swal({
                    title: "",
                    text: "Data Submitted Successfully",
                    type: "success",
                    showCancelButton: false,
                    showConfirmButton: false,
                    width: '1000px',
                    timer: 1000
                });
                // $('#Form').parsley().destroy();
                // $('#Form').parsley();
                a = false;

            }
        });
    }
}
 // }
