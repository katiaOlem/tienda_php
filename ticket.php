<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ticket de compra</title>
    
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
    <body>
       <div class="container"> 
          <h1 class="display-3 font-weight-bold text-center">Tienda Online Kat´s</h1>
          <script type="text/javascript">

            function makeArray() {
            for (i = 0; i<makeArray.arguments.length; i++)
            this[i + 1] = makeArray.arguments[i];}
            var months = new makeArray('01','02','03','04','05',
            '06','07','08','09','10','11','12');
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write("Fecha: "+ year + "-" + months[month] + "-" + day);
           
          </script> 
          </br>
          <script type="text/javascript">
            var d = new Date();
            document.write(" Hora: "+d.getHours(),':'+d.getMinutes());
          </script>
          </div> 
          <br>
          </br>

          <div class = "h3 text-center">
					<div class="row form-group">
						<label for="producto" class="col-form-label col-md-6 h1">Producto:</label>
            <div class="col-md-5 h3">
              <?php  
                $producto = $_POST["producto"];
                switch ($producto) {
                  case "395":
                    echo "ID 895516 Jeans Ciclon $395";
                    break;
                  
                  case "550":
                    echo "ID 895492 Jeans Fergino $550";
                    break;
                  case "1000":
                    echo "ID 892803 Blusa Puma $1000";
                    break;
                  case "950":
                    echo "ID 892805 Chamarra b&O $950";
                    break;
                  case "300":
                    echo "ID 9500057 Playera Nip $300";
                    break;  
                  default:
                    echo "**Error **";
                }
              ?>
            </div>
          </div>					

          <div class="row form-group">
						<label for="cantidad" class="col-form-label col-md-6 h1">Cantidad ***</label>
            <div class="col-md-6">
              <?php  
                $cantidad = $_POST["cantidad"];
                print ($cantidad." producto(s).");
               ?> 
            </div>
          </div>

          <div class="row form-group">
						<label for="precio" class="col-form-label col-md-6 h1">Precio unitario***</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                print ("$ ".$precio.".");
               ?> 
            </div>
          </div>
          

          <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Total a pagar***</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                $cantidad = $_POST["cantidad"];
                $resultado = $precio * $cantidad;
                print ("$ ". $resultado.".");
               ?> 
            </div>
          </div>           

          <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Recibido ***</label>
            <div class="col-md-6">
              <?php  
                $pago = $_POST["pagoss"];
                print ("$ ".$pago.".");
               ?> 
            </div>
          </div>   

        <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Cambio***</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                $cantidad = $_POST["cantidad"];
                $resultado = $precio * $cantidad;
                $pago = $_POST["pagoss"];
                $cambio = $pago - $resultado;
                print ("$ ". $cambio.".");
               ?> 
            </div>
          </div>    
        </center>
 
        <div class="row form-group">
						<label for="lol" class="col-form-label col-md-4"></label>
            <div class="col-md-7">
          <a href="tienda.php">  
          <button type=" " class="btn btn-outline-warning btn-lg my-1 float-right " onclick="(cerrarVentana)" id="retunrn">Comprar nuevamente</button>
          </a>       
        </div>

        </div>
      </div>
    </div>
  </body>
</html>