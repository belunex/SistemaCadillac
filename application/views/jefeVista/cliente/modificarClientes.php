<div clas="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Modificar Cliente</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <?php
            foreach($infoClientes->result() as $row) {
            echo form_open_multipart('jefe/modificarClientebd');
        ?>      
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
              
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $row->idCliente ?>" class="form-control" id="idCliente" name="idCliente">

                            <label for="nombrecompleto">Nombres:</label>
                            <input type="text" value="<?php echo $row->nombres ?>" class="form-control" id="nombres" name="nombres">
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
                            <input type="text" value="<?php echo $row->primerApellido ?>" class="form-control" id="primerApellido" name="primerApellido">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nombrecompleto">Segundo Apellido:</label>
                            <input type="text" value="<?php echo $row->segundoApellido ?>" class="form-control" id="segundoApellido" name="segundoApellido">
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
                            <label for="correo">Correo Electronico:</label>
                            <input type="email" value="<?php echo $row->correoElectronico ?>" class="form-control" id="correoElectronico" name="correoElectronico">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="numeroTel">Telefono Celular:</label>
                            <input type="text" value="<?php echo $row->numeroTelefono ?>" class="form-control" id="numeroTelefono" name="numeroTelefono">
                        </div>
                    </div> 
                    <div class="col-1">
              
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
                        <a href="<?php echo base_url();?>index.php/jefe/clientes">
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