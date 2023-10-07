<div clas="container">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registro Cliente Nuevo</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="insertarClienteNuevo.php" method="get">      
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="nombrecompleto">Nombres:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="numeroTel">Primer Apellido:</label>
                <input type="numero" class="form-control" id="numCel" name="numCel">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nombrecompleto">Segundo Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">  
              <div class="form-group">
                <label for="correo">Correo Electronico:</label>
                <input type="email" class="form-control" id="correo" name="correo">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="numeroTel">Telefono Celular:</label>
                <input type="numero" class="form-control" id="numCel" name="numCel">
              </div>
            </div> 
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Registrar Cliente</button>
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