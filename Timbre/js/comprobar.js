$('.horario').change(function(e){

var precio = $(this).val(); //guardamos el value, que contiene el precio, del checkbox que activamos

var nuevovalor = new Array(); // creamos un array vacío

var getlocal = localStorage.getItem("precios"); //asignamos el elemento "precios" a una varible

var cont;

var parslocal;

if($(this).is(":checked")){

//Si el item está activado guarda el valor en localStorage

if(getlocal != null && getlocal != "" && getlocal != false && getlocal != undefined){ //comprobamos que nuestra variable exista

parslocal = JSON.parse(getlocal); //Transforma la variable con el contenido de nuestro elemento en localStorage a un objeto Javascript

$.each(parslocal, function(index, value){

cont = index;

nuevovalor[index] = value; //llenamos nuestro array vacío con los valores que ya existen en nuestro elemento

});

cont++;

nuevovalor[cont] = precio;

localStorage.setItem("precios", JSON.stringify(nuevovalor));

} else {//en el caso que no exista el elemento en localStorage

var saveLocal = new Array();//Creamos un nuevo array vacío

saveLocal[0] = precio; //asignamos al comienzo de nuestro array, el valor de nuestro elemento

localStorage.setItem("precios", JSON.stringify(saveLocal));//guardamos nuestro valor en localStorage

}

}else {

//Si el item no está activado

if(getlocal != null && getlocal != "" && getlocal != false && getlocal != undefined){//Comprobamos que el elemento existe en localStorage

parslocal = JSON.parse(getlocal);

var contador = 0;

$.each(parslocal, function(index, value){

cont = index;

if(value != precio && value != null && value != undefined && value != false){//si el el valor que estamos haciendo el loop, no coincide al valor ingresado, entonces lo ingresa en el array

nuevovalor[contador] = value;

contador++;

}

});

if(cont == 0){//si cont es igual a 0, significa que sólo se encuentra en nuestro localStorage el precio que ingresamos, por lo tanto solo eliminamos el elemento completo

localStorage.removeItem("precios");

}else{//de lo contrario, existen más valores, pro lo que rehacemos el elemento con los valores que no coincidieron con el encontrado

localStorage.setItem("precios", JSON.stringify(nuevovalor));

}

}

}

});