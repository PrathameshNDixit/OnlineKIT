var a = false;
$(document).ready(function () {
    $("#btn_save").click(function () {
        if (a == false) {
            saveperform();
        }
    });
});
function saveperform() {
    var gender = $('#GenderName').val();
    var some = $('#Something').val();
    if (gender == "" || some == "") {
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
            url: base_path + "Gender/insertGender",
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
