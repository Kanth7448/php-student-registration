$(document).ready(function () {
  loadData();

  function loadData() {
    $.ajax({
      url: "fetch.php",

      type: "GET",

      success: function (data) {
        $("#tableData").html(data);
      },
    });
  }

  $("#studentForm").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
      url: "insert.php",

      type: "POST",

      data: $(this).serialize(),

      success: function (response) {
        if (response == "success") {
          $("#message").html("Record Inserted Successfully");

          $("#studentForm")[0].reset();

          loadData();
        } else {
          $("#message").html(response);
        }
      },
    });
  });
});
