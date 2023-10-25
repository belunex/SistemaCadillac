<div clas="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Modificar Cliente</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <?php
            foreach($infoServicios->result() as $row) {
            echo form_open_multipart('jefe/modificarServiciobd');
        ?>      
            <div class="card-body">
            <div class="row">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $row->idServicio ?>" class="form-control" id="idCliente" name="idCliente">

                            <label>Nombre del Servicio:</label>
                            <input type="text" value="<?php echo $row->tipoServicio ?>" class="form-control" id="tipoServicio" name="tipoServicio">
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
                            <input type="text" value="<?php echo $row->descripcion ?>" class="form-control" id="descripcion" name="descripcion">
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
                            <input type="text" value="<?php echo $row->precioBase ?>" class="form-control" id="precioBase" name="precioBase">
                        </div>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div> 
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Modificar Cliente</button>
                    </div>
                    <div class="col-sm-6">
                        <a href="<?php echo base_url();?>index.php/administrador/servicios">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </a>
                    </div>
                </div>  
            </div>
        <?php
            echo form_close();
            }
        ?>    
    </div>
</div>