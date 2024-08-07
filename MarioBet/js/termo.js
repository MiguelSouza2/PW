const lista_de_palavras = ["p", "r", "i", "m", "o"];

let exibicao_palavra;

let line1 = document.getElementById("line1");
let line2 = document.getElementById("line2");
let line3 = document.getElementById("line3");
let line4 = document.getElementById("line4");
let line5 = document.getElementById("line5");

lines = [line1, line2, line3, line4, line5];

let letter_1 = document.querySelectorAll(".termo_input")[0];
let letter_2 = document.querySelectorAll(".termo_input")[1];
let letter_3 = document.querySelectorAll(".termo_input")[2];
let letter_4 = document.querySelectorAll(".termo_input")[3];
let letter_5 = document.querySelectorAll(".termo_input")[4];


let letterInputs = document.querySelectorAll(".termo_input");


function return_letter() {

  letterInputs.forEach((input, index) => {
    input.addEventListener("keydown", function (event) {
      if (event.key === "Backspace" && index > 0) {
        letterInputs[index - 1].focus();
      }
    });
  });
}


// letter_2.addEventListener("keydown", function (event) {
//   if (event.key === "Backspace") {
//     letter_1.focus();
//   }
// });
// letter_3.addEventListener("keydown", function (event) {
//   if (event.key === "Backspace") {
//     letter_2.focus();
//   }
// });
// letter_4.addEventListener("keydown", function (event) {
//   if (event.key === "Backspace") {
//     letter_3.focus();
//   }
// });
// letter_5.addEventListener("keydown", function (event) {
//   if (event.key === "Backspace") {
//     letter_4.focus();
//     letter_5.value = '';
//   }
// });



function start_game() {
  let input_letters = [
    letter_1.value,
    letter_2.value,
    letter_3.value,
    letter_4.value,
    letter_5.value
  ];

  if (input_letters.join("") === lista_de_palavras.join("")) {
    letter_1.style.backgroundColor = "green";
    letter_2.style.backgroundColor = "green";
    letter_3.style.backgroundColor = "green";
    letter_4.style.backgroundColor = "green";
    letter_5.style.backgroundColor = "green";
  } else {
    for (let input of letterInputs) {
      input.value != "";
      input.disabled = false;
    }
    letter_2.focus();
  }
}







