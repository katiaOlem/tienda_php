

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
            <form name="validar" action="ticket.php" method="POST" onsubmit="return avanzar()" class="table table-striped table-dark"> 

					  <div class="row form-group">
						<label for="producto" class="col-form-label col-md-6 h1">Selecciona tu Producto </label>
            <div class="col-md-5">
            <select class="form-control" id="producto" name="producto" required >
            <option value="395">ID 895516 Jeans Ciclon $395 </option>
           <?php
            $db = new SQLite3('tienda.db');

            $results = $db->query('SELECT * FROM productos');
            while ($row = $results->fetchArray()) {
            echo $row ["productos"]."<br />";
}
?>
            
          </select>  
          </div>
          </div>
          <center>
          <div class="row form-group">
						<label for="cantidad" class="col-form-label col-md-6 h1">Cantidad:</label>
            <div class="col-md-3">
              <input type="number" id="cantidad" name="cantidad" min="1" max="10" class="form-control" required>
              <small id="matriculaayuda" class="text-primary">máx 10 productos</small>
              
            </div>
          </div>
          
          <div class="row form-group">
          
						<label for="edad" class="col-form-label col-md-3"></label>
            <div class="col-md-7">
          <input type="button"  onclick="total()" id="totales" value="Agregar al carrito" class="btn btn-outline-success btn-lg my-1 float-right">
          <button type="reset" class="btn btn-outline-warning btn-lg my-1 float-left">Limpiar</button>         
            </div>
          </div>
          <br>
          <br>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg> 
            <br>
            <div class="row form-group">
						<label for="edad" class="col-form-label col-md-6 h1">Compras</label>
            <div class="col-md-3">
              <textarea class="form-control"  id="detalles" name="detalles" values="save" readonly rows="5"required> </textarea>
            </div> 
            </div> 
          <style type="text/css"> 
          textarea {
            resize :  none;
          } 
          </style>
        
          <div class="row form-group">
						<label for="cantidad_pagar" class="col-form-label col-md-6 h1">Total</label>
            <div class="col-md-3">
              <input type="number" id="cantidad_pagar" name="cantidad_pagar" class="form-control" readonly placeholder="0">
            </div>
          </div>

          <div class="row form-group">
						<label for="pagos" class="col-form-label col-md-6 h1">Ingresa pago</label>
            <div class="col-md-2">
              <input type="number" id="pagos" name="pagoss" class="form-control"  min="1" required step="any">
            </div>
            </div>
            <br>
          <div class="row form-group">
						<label for="lol" class="col-form-label col-md-6"></label>
            <div class="col-md-5">
          <button type="submit" class="btn btn-danger btn-lg my-1 float-right "  " id="pagos">Pagar</button>
           <br> 
           </br> 
           <br>
            <p class="text-primary small text-right">ticket de compra</p>           
        </div>
        </div>
        


        </form>
          <div class="col-md-5" class="container-fluid">
        <a href="historial_ventas.php">Historial </a>
        </div>
</center>
</center>
 </center>
  </center>
  </body>
</html>