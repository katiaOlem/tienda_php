<!DOCTYPE HTML>
<html lang=es>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tienda Online Kat´s </title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	 crossorigin="anonymous">
	<script type="text/javascript" src="carrito.js" charset="utf-8">
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
  </head>
 <style>

     body {

     background: -webkit-linear-gradient(black,purple);
     }

     h2 {
       color:silver;
     }

     </style>

     <div class="container">
		 <div class="bg-secondary">
			<div class="col-md-12 ">
				<h2 class="display-3 font-weight-bold text-right ">Buscas Moda?, Tienda Online Kat´s tu mejor Opcion</h2>
      </div>
      </div>

    <p>
     <img 
     src="https://estaciondelsiglo.net/wp-content/uploads/2019/12/invierno-hombres-1320x742.jpg" align="left" width="25%" >
     <img
     src="https://i.ytimg.com/vi/MMEvncWQmnQ/maxresdefault.jpg" align="left" width="25%">
     <img
     src="https://i.ytimg.com/vi/5nLhN254PQ8/maxresdefault.jpg" align="left" width="25%" >
     <img
     src="https://i.ytimg.com/vi/pvvjtSQEhsM/maxresdefault.jpg"
     align="left" width="25%" >
    </p>
    <br>
  
   
     <center>
            <for   nombre = " validar " action = " ticket.php " method = " POST " onsubmit = " return avanzar () " > 

					<div  class = " grupo de formulario de fila " >
						< label  for = " producto " class = " col-form-label col-md-4 h1 " > Elige: </ label >
            <div  class = " col-md-6 " >
              <select  class = " form-control text-center " id = " producto " name = " producto " required  >
                <opción  > ID & MARCA </opción >
                <?php
                     $ b = new  SQLite3 ( "tienda.db" );
                     $resultado = $db -> query ( "SELECT * FROM productos where registrados > 0;" );
                     while ( $fila = $resultado -> fetchArray ()) {
                ?>
                        <option  value = " <?php  echo  $row [ 'precio' ] ?> " >   <?php  echo  $row [ 'producto' ] ?>  </option > ;
                <?php
                     }
                ?>
                
                </selct >
            </div >
          </div >					

          <div  class = " grupo de formulario de fila " >
						<label  for = " cantidad " class = " col-form-label col-md-4 h1 " > Cantidad</ label >
            <div  class = " col-md-4 " >
              <input  type = " number " id = " cantidad " name = " cantidad " min = " 1 " max = " 100 " class = " form-control " required >
            </div >
          </div >

          <div  class = " grupo de formulario de fila " >
						<label  for = " edad " class = " col-form-label col-md-4 " > </ label >
            <div  class = " col-md-7 " >
          <input  type = " button "   onclick = " total () " id = " totales " value = " Agregar  " class = " btn btn-outline-danger btn-lg my-1 float-left " >              
            </div >
          </div > 

           <div  class = " grupo de formulario de fila " >
						<label  for = " edad " class = " col-form-label col-md-4 h1 " > Detalles</ label >
            <div  class = " col-md-6 " >
              <textarea  class = " form-control "   id = " detalles " name = " detalles " readonly  rows = " 5 " required >  </textarea >
            </div > 
            </div > 
          <style  type = " text / css " > 
          textarea {
            redimensionar:ninguno;
          } 
          </style>
          <div  class = " grupo de formulario de fila " >
						<label  for = " cantidad_pagar " class = " col-form-label col-md-4 h1 " > Cantidad a pagar: </label >
            < div  class = " col-md-6 " >
              <input  type = " number" id = "cantidad_pagar " name = " cantidad_pagar " class = " form-control " readonly  placeholder = " 0 " >
            </div >
          </div >

          <div  class = " grupo de formulario de fila " >
						<label  for = " pagos " class = " col-form-label col-md-4 h1 " > Pago Ingresa: </ label >
            <div  class = " col-md-6 " >
              <input  type = " number " id = " pagos " name = " pagoss " class = " form-control "   min = " 1 " paso requerido  = " any " >
            </div >
          </Div > <br >

        <button  type = " reset " class = " btn btn-outline-warning btn-lg my-1 float-right " > Borrar </button >
 
        <div  class = " grupo de formulario de fila " >
						<label  for = " lol " class = " col-form-label col-md-4 " > </label >
            <div  class = " col-md-7 " >
          <button de  tipo =" submit " clase =" btn btn-outline-éxito BTN-LG Mi-1 flotador-derecha "" id = "pagototes" > Pagar </button>  <br><br >          
        </div >

        </formulario >
        </div >
      </div >
    </div >
  </head>
</html >