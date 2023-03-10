$(document).ready(function() {
  $("#btn_save").click(function() {
    var id = $("input[name='id']").val();
    var blog_label = $("input[name='blog_label']").val();
    var blog_link = $("input[name='blog_link']").val();


    if (id == "") {
      swal({
        title: "",
        text: "Please Enter Required Fields",
        type: "error",
      });
    }
    else {
      a = true;
      $.ajax({
        type: "POST",
        url: base_path + "Blogs/update",
        data: {
          id: id,
          blog_label: blog_label,
          blog_link: blog_link,
        },
        success: function(response) {
          if (response == 1) {
            Swal.fire({
              title: "Success!",
              text: "Data updated successfully!",
              icon: "success",
              confirmButtonText: "OK"
            });
          } else {
            Swal.fire({
              title: "Error!",
              text: "Data failed to update!",
              icon: "error",
              confirmButtonText: "OK"
            });
          }
        }
      });
    }
  });
});
