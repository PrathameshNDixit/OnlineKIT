var a = false;
$(document).ready(function () {
  $("#btn_save").click(function () {
    if (a == false) {
      saveperform();
    }
  });
});

function saveperform() {
  var std_id = $("#std_id").val();
  var std_fullname = $("#std_fullname").val();
  var emp_address = $("#emp_address").val();
  var std_fathername = $("#std_fathername").val();
  var std_mothername = $("#std_mothername").val();
  var std_age = $("#std_age").val();
  var std_dob = $("#std_dob").val();
  var std_gender = $("#std_gender").val();
  var std_religion = $("#std_religion").val();
  var std_cast = $("#std_cast").val();
  var std_subcast = $("#std_subcast").val();
  var std_appliedfor = $("#std_appliedfor").val();
  var std_qualification = $("#std_qualification").val();
  var std_department = $("#std_department").val();
  var std_branch = $("#std_branch").val();
  var std_term = $("#std_term").val();
  var std_degree = $("#std_degree").val();
  var std_degreeper = $("#std_degreeper").val();
  var std_master = $("#std_master").val();
  var std_masterper = $("#std_masterper").val();
  var std_pincode = $("#std_pincode").val();
  var std_adharnumber = $("#std_adharnumber").val();
  var std_mobileno = $("#std_mobileno").val();
  var std_country = $("#std_country").val();
  var std_state = $("#std_state").val();
  var std_city = $("#std_city").val();
  var std_certification = $("#std_certification").val();
  var std_hobbies = $("#std_hobbies").val();
  var std_skills = $("#std_skills").val();
  var std_address = $("#std_address").val();
  var std_adharphoto = $("#std_adharphoto").val();
  var std_photo = $("#std_photo").val();

  if (std_id == ""||std_mothername==""||std_address=="") {
    swal({
      title: "",
      text: "Please Enter Required Fields",
      type: "error",
    });
  }
  else {
    a = true;
    $.ajax({
      url: base_path + "Studentregistration/insertStudentDetails",
      type: "POST",
      data: $("#Form").serialize(),
      beforeSend: function () {
        $("#btn_save").prop("disabled", true);
        $("#btn_save").html("Loading");
      },
      success: function (data) {
        $("#btn_save").prop("disabled", false);
        $("#btn_save").html("Save");
        $("#Form").trigger("reset");
        swal({
          title: "",
          text: "Data Submitted Successfully",
          type: "success",
          showCancelButton: false,
          showConfirmButton: false,
          width: "1000px",
          timer: 1000,
        });
        a = false;
        setTimeout(function () {
          location.reload();
        }, 1000);
      },
    });
  }
}
