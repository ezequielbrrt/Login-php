$(document).ready(function(){
	$("#registro").hide();
	$("#ingresa").hide();

    $("#ingresa_boton").click(function(){
        $("#ingresa").show();
        $("#registro").hide();


    });
    $("#registra_boton").click(function(){
        $("#registro").show();
        $("#ingresa").hide();
    });


});







function validacion() {
edad = document.getElementById('edad').value;
nombre = document.getElementById('nombre').value;
email = document.getElementById('email').value;
username_registro = document.getElementById('username_registro').value;
pwd_registro = document.getElementById('pwd_registro').value;
apellido = document.getElementById('apellido').value;

if (isNaN(edad) || edad > 100 ) {
	window.alert("Edad invalida, no creo que tengas esa edad ");
}

if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
	window.alert("Escribe un nombre");
}
  

  return true;


}

