const open = document.querySelector("#openButton");
const close = document.querySelector("#closeButton");
const sidebar = document.querySelector(".sidebar");

open.onclick = () => {
  sidebar.style.display = "flex";
  open.style.display = "none";
};
close.onclick = () => {
  sidebar.style.display = "none";
  open.style.display = "flex";
};
