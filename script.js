document.addEventListener("DOMContentLoaded", function () {
  loadData();

  function loadData() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "fetch.php", true);

    xhr.onload = function () {
      if (xhr.status == 200) {
        document.getElementById("tableData").innerHTML = xhr.responseText;
      }
    };

    xhr.send();
  }

  document
    .getElementById("studentForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      var xhr = new XMLHttpRequest();

      xhr.open("POST", "insert.php", true);

      xhr.onload = function () {
        if (xhr.status == 200) {
          if (xhr.responseText == "success") {
            document.getElementById("message").innerHTML =
              "Record Inserted Successfully";

            document.getElementById("studentForm").reset();

            loadData();
          } else {
            document.getElementById("message").innerHTML = xhr.responseText;
          }
        }
      };

      var formData = new FormData(this);

      xhr.send(formData);
    });
});
