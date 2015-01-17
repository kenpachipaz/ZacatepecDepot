function mostrarMsg(msg){
  switch(msg){
    case 1:
      document.getElementById('errorID').style.display = 'block';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
    break;
    case 2:
      document.getElementById('errorDepartamento').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 3:
      document.getElementById('errorNombre').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 4:
      document.getElementById('errorCategoria').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 5:
      document.getElementById('errorMarca').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 6:
      document.getElementById('errorPrecio').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 7:
      document.getElementById('errorPeso').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 8:
      document.getElementById('errorExistencia').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
    case 9:
      document.getElementById('errorDescripcion').style.display = 'block';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      document.getElementById('errorImg').style.display = 'none';
      break;
      case 10:
      document.getElementById('errorImg').style.display = 'block';
      document.getElementById('errorDescripcion').style.display = 'none';
      document.getElementById('errorID').style.display = 'none';
      document.getElementById('errorNombre').style.display = 'none';
      document.getElementById('errorCategoria').style.display = 'none';
      document.getElementById('errorMarca').style.display = 'none';
      document.getElementById('errorPrecio').style.display = 'none';
      document.getElementById('errorPeso').style.display = 'none';
      document.getElementById('errorExistencia').style.display = 'none';
      document.getElementById('errorDepartamento').style.display = 'none';
      break;
  }

 }
  function hacer_click(){
                formulario.descripcion.value = "";
            }
  function esVacio(texto){
    
    for(i=0; i < texto.length; i++){
      if(texto.charAt(i) != " ")
        return false;
    }
    return true;
  }
  function validaFlotante(texto){
    var regex  = /^\d+(?:\.\d{0,2})$/;
    for(i=0; i < texto.length; i++){
      if(texto.charAt(i) != " ")
        return false;
    }
    if (regex.test(texto)){
      return false;
    }
    return true;
  }
  function yaSelecciono(s){
    if(s == "nada")
      return false;
    else
     return true;
  }
  function esDigito(c){
    return ((c >= "0") &&(c <= "9"));
  }
  function esNumero(q){
    for(i = 0; i < q.lenth; i++){
     if(esDigio((q.charAt(i)) != true)){
      return false
     }
    }
    return true;
  } 
  function valida(formulario){
    if(esVacio(formulario.idProducto.value)==true){
      formulario.idProducto.focus();
      mostrarMsg(1);
      return false;
    }
    if(yaSelecciono(formulario.departamento.value) != true){
      mostrarMsg(2);
      return false;
    }
    if(esVacio(formulario.nombre.value)==true){
      formulario.nombre.focus();
      mostrarMsg(3);
      return false;
    }
    if(esVacio(formulario.categoria.value)==true){
      formulario.categoria.focus();
      mostrarMsg(4);
      return false;
    }
    if(esVacio(formulario.marca.value)==true){
      formulario.marca.focus();
      mostrarMsg(5);
      return false;
    }
    if(validaFlotante(formulario.precio.value)==true){
      formulario.precio.focus();
      mostrarMsg(6);
      return false;
    }
    if(esVacio(formulario.peso.value)==true){
      formulario.peso.focus();
      mostrarMsg(7);
      return false;
    }
    if(esVacio(formulario.existencia.value)==true){
      formulario.existencia.focus();
      mostrarMsg(8);
      return false;
    }
    if(esVacio(formulario.descripcion.value)==true){
      formulario.descripcion.focus();
      mostrarMsg(9);
      return false;
    }
    if(esVacio(formulario.img.value)==true){
      formulario.img.focus();
      mostrarMsg(10);
      return false;
    }
    /*if((esNumero(formulario.tel.value) == false) || (LongitudExacta(formulario.tel.value, 10) == false)){
      formulario.tel.focus();
      alert('Introduce un numero Telefonico Valido')
      return false;
    }
    if(validaFloat(formulario.precio.value == false)){
      formulario.precio.focus();
      document.getElementById('noFlotante').style.display='bloc';
      return false;
    }*/
  return true;
  }

  /*------------------------------------*/
  function msg(){
    alert('hola');
  }