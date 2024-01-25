window.onload = iniciar;

function iniciar(){
    var btncalcular = document.getElementById("btncalcular");
    btncalcular.addEventListener("click", clickbtncalcular);

}

function clickbtncalcular(){
    var txtpeso = document.getElementById("txtpeso");
    var peso = txtpeso.value;

    var txtaltura = document.getElementById("txtaltura");
    var altura = txtaltura.value;
    
    var imc = peso / (altura * altura);
    var msj = "";
   if (imc < 18.5) {
         msj = "Delgadez o bajo peso";
      } else if (imc >= 18.5 && imc <= 24.9) {
         msj ="Normal o peso saludable";
      } else if (imc >= 25.0 && imc <= 29.9) {
        msj = "Sobrepeso";
      } else {
        msj = "Obesidad";
      }

    // window.alert(msj + " " + " " + imc);
   document.getElementById('txtresultado').value = imc.toFixed(2);
   document.getElementById('mensaje').textContent = msj ;
}