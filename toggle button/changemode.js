let buttons = document.querySelector(".buttons");
let off = document.querySelector("#off");
let on = document.querySelector("#on");
let body = document.querySelector("body");
let para = document.querySelector(".para");

let mode = "light";

changemode = () => {
  if (mode == "light") {
    buttons.classList.remove("light");
    buttons.classList.add("dark");
    buttons.style.border = "2px solid white";
    para.style.color = "white";
    on.classList.remove("dark");
    on.classList.add("light");
    on.innerText = "";
    off.innerText = "ON";
    off.style.color = "white";
    body.style.backgroundColor = "black";
    mode = "dark";
  } else if (mode == "dark") {
    buttons.classList.remove("dark");
    buttons.classList.add("light");
    buttons.style.border = "2px solid black";
    para.style.color = "black";
    off.classList.remove("light");
    off.classList.add("dark");
    off.innerText = "";
    on.innerText = "OFF";
    body.style.backgroundColor = "white";
    mode = "light";
  }
};

buttons.addEventListener("click", changemode);
