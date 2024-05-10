document.addEventListener("DOMContentLoaded", function () {
  let submit = document.querySelector(".button");

  submit.addEventListener("click", submitted);
  document.addEventListener("keypress", enter);

  function enter(e) {
    if (e.key == "Enter") {
      submitted();
    }
  }
  function submitted() {
    let fullname = document.querySelector("#fullname");
    let rollno = document.querySelector("#rollno");
    if (fullname.value != "" && rollno.value != "") {
      print();
      fullname.focus();
    } else {
      alert("Enter both values");
      if (fullname.value == "") {
        fullname.focus();
      } else if (rollno.value == "") {
        rollno.focus();
      }
    }
  }

  function print() {
    //Name
    let fullname = document.querySelector("#fullname");
    let nameColumn = document.querySelector(".fullname");
    let liName = document.createElement("li");
    liName.classList.add("cell");
    liName.textContent = fullname.value;
    nameColumn.appendChild(liName);
    fullname.value = "";

    //RollNo
    let rollno = document.querySelector("#rollno");
    let rollColumn = document.querySelector(".rollno");
    let liRoll = document.createElement("li");
    liRoll.classList.add("cell");
    liRoll.textContent = rollno.value;
    rollColumn.appendChild(liRoll);
    rollno.value = "";

    //Delete
    let deleteColumn = document.querySelector(".deleteoperation");
    let deletebutton = document.createElement("li");
    deletebutton.classList.add("cell");
    deletebutton.innerHTML = "<button id='deletebutton'>DELETE</button>";
    deletebutton.addEventListener("click", () => {
      nameColumn.removeChild(liName);
      nameColumn.removeChild(input1);
      rollColumn.removeChild(liRoll);
      rollColumn.removeChild(input2);
      deleteColumn.removeChild(deletebutton);
      editColumn.removeChild(editbutton);
    });
    deleteColumn.appendChild(deletebutton);

    //Edit
    let editColumn = document.querySelector(".editoperation");
    let donebutton = document.createElement("li");
    donebutton.classList.add("cell");
    donebutton.innerHTML = `<button id="donebutton">DONE</button>`;
    donebutton.addEventListener("click", () => {
      liName.textContent = document.querySelector("#newname").value;
      liRoll.textContent = document.querySelector("#newroll").value;
      nameColumn.replaceChild(liName, input1);
      rollColumn.replaceChild(liRoll, input2);
      editColumn.replaceChild(editbutton, donebutton);
    });

    let editbutton = document.createElement("li");
    editbutton.classList.add("cell");
    editbutton.innerHTML = "<button id='editbutton'>EDIT</button>";
    let input1 = document.createElement("li");
    let input2 = document.createElement("li");

    input1.innerHTML = `<input type='text' id="newname" class="newinput" value='${liName.textContent}'; >`;
    input2.innerHTML = `<input type='number' id="newroll" class="newinput"  value='${liRoll.textContent}'; >`;
    editbutton.addEventListener("click", () => {
      nameColumn.replaceChild(input1, liName);
      rollColumn.replaceChild(input2, liRoll);
      editColumn.replaceChild(donebutton, editbutton);
    });
    editColumn.appendChild(editbutton);
  }

  // let submit = document.querySelector("#submit").addEventListener("submit", function (event) {
  //     event.preventDefault();
  //     print();
  //   });
});
