<div>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registro Cliente Nuevo</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="insertarClienteNuevo.php" method="get">      
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nombrecompleto">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nombrecompleto">Apellidos:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su napellido">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="numeroTel">Numero de Tegilefono/Celular:</label>
                <input type="numero" class="form-control" id="numCel" name="numCel" placeholder="Ingrese su Numero">
              </div> 
              <div class="form-group">
                <label for="correo">Ingrese su Correo Electronico:</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electronico">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" onclick="insertCli();" class="btn btn-primary">Registrar Cliente</button>
            </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div id="respuestainsert">
    
                </div>
              </div>
            </div>
        </div>
          
      </form>
    </div>
  </div>