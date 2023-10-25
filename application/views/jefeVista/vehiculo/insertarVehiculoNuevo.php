<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Registro Vehículo Nuevo</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <?php
            echo form_open_multipart('jefe/agregarVehiculobd');
        ?>      
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        
                    </div>
                    <div class="col-1">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Cliente:</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
                                <div id="example1_filter" class="dataTables_filter input-group">
                                    <input type="search" class="form-control" placeholder="" aria-controls="example1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button" style="color: #FFFFFF; border-color: #7AB700; background-color: #7AB700"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <button type="submit" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">+</button>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Marca:</label>
                            <select id="marca" name="marca" class="form-control">
                                <option value="0">Elija la marca</option>
                                <option value="Toyota">Toyota</option>
                                <!--<option value="Ford">Ford</option>
                                <option value="Honda">Honda</option>-->
                            </select>
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
                            <label>Modelo:</label>
                            <select id="modelo" name="modelo" class="form-control">
                                <option value="0">Elija el modelo</option>
                                <option value="Toyota Camry">Toyota Camry</option>
                                <option value="Toyota Corolla">Toyota Corolla</option>
                                <option value="Toyota Prius">Toyota Prius</option>
                                <option value="Toyota Tacoma">Toyota Tacoma</option>
                            </select>
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
                            <label>Matricula:</label>
                            <input type="text" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="col-sm-3">  
                        <div class="form-group">
                            <label>Año fabricacion:</label>
                            <input type="text" class="form-control" name="anioFabricacion" id="anioFabricacion">
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
                            <label>Color:</label>
                            <input type="text" class="form-control" name="color" id="color">
                        </div>
                    </div>
                    <div class="col-sm-3">  
                        <div class="form-group">
                            <label>Kilometraje:</label>
                            <input type="text" class="form-control" id="kilometraje" name="kilometraje">
                        </div>
                    </div>
                    <div class="col-3">
                            
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