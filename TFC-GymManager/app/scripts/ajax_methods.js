$(document).ready(function () {
  init_active_plan_loader();
  init_edit_plan();
  init_edit_user();
  change_image();
  load_access_button();
});

function load_access_button() {
  $("#qr_button").click(function () { 
    console.log("QR PULSADO");
    create_access();
  });
}

function create_access() {
  const url = "index.php?action=update_access_status";
  window.location.href = url;
}


function change_image() {
  $("#user_image_div").click(function () {
    $("#image_hidden_input").click();
  });

  $("#image_hidden_input").change(function () {
    $("#image_hidden_form").submit();
  });
}

function init_edit_user() {
  let column_changes = document.querySelectorAll(
    ".member_table_container table tr td"
  );
  for (let i = 0; i < column_changes.length; i++) {
    column_changes[i].addEventListener("click", edit_user);
  }
}

function edit_user() {
  const url =
    "index.php?action=administrate&subpage=edit_user&user_id=" +
    $(this).closest("tr").data("id");
  window.location.href = url;
}

function init_edit_plan() {
  let column_changes = document.querySelectorAll(
    ".memberships_table_container table tr td:not(.active_column)"
  );
  for (let i = 0; i < column_changes.length; i++) {
    column_changes[i].addEventListener("click", edit_plan);
  }
}

function edit_plan() {
  const url =
    "index.php?action=administrate&subpage=edit_pplan&plan_id=" +
    $(this).closest("tr").data("id");
  window.location.href = url;
}

function init_active_plan_loader() {
  let column_changes = document.getElementsByClassName("active_column");
  for (let i = 0; i < column_changes.length; i++) {
    column_changes[i].addEventListener("click", switch_state);
  }
}

function switch_state() {
  const url =
    "index.php?action=active_switch&plan_id=" + this.getAttribute("data-id");
  const spinner = document.createElement("div");
  spinner.classList.add("lds-dual-ring");
  this.appendChild(spinner);
  fetch(url)
    .then((response) => response.json())
    .then((json) => {
      if (json.changed) {
        if (json.new_state == 1) {
          this.innerText = "Inactivo";
        } else {
          this.innerText = "Activo";
        }
        console.log("CHANGED");
      } else {
        console.log("ERROR CHANGING");
      }
    })
    .catch((error) => {
      console.error("Error: " + error);
    })
    .finally(() => {
      setTimeout(() => {
        spinner.remove();
      }, 1000);
    });
}
