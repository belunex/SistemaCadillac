<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Registro Usuario Nuevo</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <?php
            echo form_open_multipart('');
        ?>      
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
              
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="nombrecompleto">Nombres:</label>
                            <input type="text" class="form-control" id="nombres" name="nombres">
                        </div>
                    </div>
                    <div class="col-1">
              
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
              
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="numeroTel">Primer Apellido:</label>
                            <input type="numero" class="form-control" id="primerApellido" name="primerApellido">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nombrecompleto">Segundo Apellido:</label>
                            <input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
                        </div>
                    </div>
                    <div class="col-1">
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
              
                    </div>
                    <div class="col-sm-3">  
                        <div class="form-group">
                            <label for="correo">CI:</label>
                            <input type="email" class="form-control" id="ci" name="ci">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="numeroTel">Fecha Contratación:</label>
                            <input type="date" class="form-control" required aria-invalid="true" id="fechaContratacion" name="fechaContratacion">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="numeroTel">Telefono Celular:</label>
                            <input type="numero" class="form-control" id="numeroTelefono" name="numeroTelefono">
                        </div>
                    </div>
                    <div class="col-1">
                    
                    </div> 
                </div>
                <div class="row">
                    <div class="col-1">
              
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="numeroTel">Direccion:</label>
                            <input type="numero" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nombrecompleto">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="correoElectronico" name="correoElectronico">
                        </div>
                    </div>
                    <div class="col-1">
                    
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row" style="text-align: center;">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Guardar</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
            </div>   
        <?php
            echo form_close();
        ?>
    </div>
</div>