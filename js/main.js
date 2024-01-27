"use strict";
// logout
const btnLogout = document.getElementById("logout");
btnLogout.addEventListener("click", e => {
 e.preventDefault();
 swal({
  title: "Are you sure?",
  text: "This action will log you out of the page.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
 }).then(willDelete => {
  if (willDelete) {
   window.location.href = "http://localhost/gs/index.php";
  }
 });
});
