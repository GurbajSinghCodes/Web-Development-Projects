let buttons = document.querySelectorAll(".buttons");
let reset = document.querySelector("#rst-btn");
let winnerparax = document.querySelector("#parax");
let winnerparao = document.querySelector("#parao");
let newgame = document.querySelector("#newgame");
let input = "X";
let count = 0;
let gamedraw = true;
let wincondition = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    if (input == "X") {
      button.style.color = "white";
      button.style.animation = "none";
      button.innerHTML = "X";
      input = "O";
    } else {
      button.style.color = "black";
      button.style.animation = "none";
      button.innerHTML = "O";
      input = "X";
    }
    button.disabled = true;
    count++;
    setTimeout(checkwinner, 1000);
    setTimeout(drawgame, 1500);
  });
});

checkwinner = () => {
  wincondition.forEach((condition) => {
    let text1 = buttons[condition[0]].innerText;
    let text2 = buttons[condition[1]].innerText;
    let text3 = buttons[condition[2]].innerText;
    if (text1 == text2 && text2 == text3 && text3 == "X") {
      gamedraw = false;
      console.log("X win");
      count = 0;
      winnerparax.classList.remove("hide");
      winnerparax.classList.add("para");
      newbutton();
      newgame.setAttribute("id", "new");
      buttons.forEach((button) => {
        button.disabled = true;
      });
    } else if (text1 == text2 && text2 == text3 && text3 == "O") {
      gamedraw = false;
      console.log("O win");
      count = 0;
      winnerparao.classList.remove("hide");
      winnerparao.classList.add("para");
      newbutton();
      newgame.setAttribute("id", "new");
      buttons.forEach((button) => {
        button.disabled = true;
      });
    }
  });
};

drawgame = () => {
  if (gamedraw == true) {
    if (count == 9) {
      alert("game draw");
    }
  }
};

reset.addEventListener("click", () => {
  buttons.forEach((button) => {
    button.innerText = "";
    button.disabled = false;
  });
  count = 0;
  input = "X";
  gamedraw = true;
});
newbutton = () => {
  newgame.addEventListener("click", () => {
    buttons.forEach((button) => {
      button.innerText = "";
      button.disabled = false;
    });
    winnerparao.classList.add("hide");
    winnerparax.classList.add("hide");
    newgame.setAttribute("id", "newgame");
    count = 0;
    input = "X";
    gamedraw = true;
  });
};
