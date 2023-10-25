<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Registro Servicio Nuevo</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <?php
            echo form_open_multipart('administrador/agregarServiciobd');
        ?>      
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nombre del Servicio:</label>
                            <input type="text" class="form-control" id="tipoServicio" name="tipoServicio">
                        </div>
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                    
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Descripcion del Servicio:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                        </div>
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-sm-3">  
                        <div class="form-group">
                            <label>Precio:</label>
                            <input type="text" class="form-control" id="precioBase" name="precioBase">
                        </div>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>  
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <div class="row" style="text-align: center;">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Registrar Vehículo</button>
                    </div>
                    <div class="col-3">
                        <a href="<?php echo base_url();?>index.php/jefe/vehiculos">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </a>
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