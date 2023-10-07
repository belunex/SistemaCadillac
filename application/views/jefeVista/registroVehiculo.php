<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Registro Vehículo Nuevo</h3>
        </div>
      <!-- /.card-header -->
      <!-- form start -->
        <form action="insertarClienteNuevo.php" method="get">      
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
                            <label for="nombrecompleto">Marca:</label>
                            <select id="carrera" name="carrera" class="form-control">
                                <option value="0">Elija la marca</option>
                                <option value="1">Pulido Completo</option>
                                <option value="2">Pintura General</option>
                                <option value="3">Chaperia delantera</option>
                                <option value="4">Chaperia Trasera</option>
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
                            <label for="numeroTel">Modelo:</label>
                            <select id="carrera" name="carrera" class="form-control">
                                <option value="0">Elija el modelo</option>
                                <option value="1">Pulido Completo</option>
                                <option value="2">Pintura General</option>
                                <option value="3">Chaperia delantera</option>
                                <option value="4">Chaperia Trasera</option>
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
                            <label for="correo">Año fabricacion:</label>
                            <input type="email" class="form-control" id="correo" name="correo">
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
                            <label for="correo">Matricula:</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                        </div>
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Registrar Vehículo</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>