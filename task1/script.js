let par = document.querySelector(".paragraph");
let btnA = document.getElementById("btnA");
let btnP = document.getElementById("btnP");

btnA.addEventListener("click", function () {
  btnP.removeAttribute("disabled");
});

btnP.addEventListener("click", function () {
  par.classList.toggle("hide");
  btnP.setAttribute("disabled", "true");
});
