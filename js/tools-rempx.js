// Umrechner px in rem
document.addEventListener('DOMContentLoaded', _ => {
  let rempx = false;
  const res = document.querySelector("#res");
  const resUnit = document.querySelector("#res ~ span");
  const val = document.querySelector("#val");
  const valUnit = document.querySelector("#val ~ span");
  const btnChangeUnit = document.querySelector("#btnChangeUnit");
  const units = document.querySelector("#units");
  const standard = document.querySelector("#jdbStandard");

  btnChangeUnit.addEventListener("click", _ => {
    let valValue = val.value;
    let resValue = res.innerHTML;
    res.innerHTML = valValue;
    val.value = resValue;
    if (rempx) {
      rempx = false;
      valUnit.innerHTML = "px";
      resUnit.innerHTML = "rem";
      units.innerHTML = "px / rem";
    } else {
      rempx = true;
      valUnit.innerHTML = "rem";
      resUnit.innerHTML = "px";
      units.innerHTML = "rem / px";
    }
  });

  function calculate() { 

    let result = "&nbsp;";

    if (rempx) {
      result = parseFloat(val.value * standard.value);
    } else {
      result = parseFloat(val.value / standard.value);
    }

    res.innerHTML = result;
  }

  val.addEventListener('input', calculate);
  standard.addEventListener('input', calculate);
});