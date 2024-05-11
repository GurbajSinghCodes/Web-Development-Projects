const password1 = document.querySelector("#password1");
const password2 = document.querySelector("#password2");
const unmatched = document.querySelector("#unmatched");
const submit = document.querySelector("#submit");
checkpass = () => {
  if (password1.value != password2.value) {
    unmatched.innerText = "Passwords do not match";
    submit.disabled = true;
    submit.style.backgroundColor = "rgb(250,250,250)";
    submit.style.cursor = "default";
  } else {
    unmatched.innerText = "";
    submit.disabled = false;
    submit.style.cursor = "pointer";
    submit.style.backgroundColor = "rgb(255,255,255)";
  }
};
password2.addEventListener("keyup", checkpass);
password1.addEventListener("keyup", checkpass);

const dob = document.querySelector("#dob");
dob.addEventListener("focus", () => {
  dob.type = "date";
});
dob.addEventListener("blur", () => {
  dob.type = "text";
});
