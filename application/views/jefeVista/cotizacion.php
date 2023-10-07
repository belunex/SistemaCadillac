<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Nueva Cotizacion</h3>
        </div>
        <div class="card-body">
            <div class="row">
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
                <div class="col-5">
                    <div>
                        <button type="submit" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">+</button>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="numeroTel">Aqui iria el nombre del cliente</label><br>
                        <label for="numeroTel">Aqui iria el numero de telefono del cliente</label><br>
                        <label for="numeroTel">Aqui iria el nombre del vehiculo del cliente</label><br>
                        <label for="numeroTel">Aqui iria la fecha de registro del cliente</label><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <select id="carrera" name="carrera" class="form-control">
                        <option value="0">Elija el servicio</option>
                        <option value="1">Pulido Completo</option>
                        <option value="2">Pintura General</option>
                        <option value="3">Chaperia delantera</option>
                        <option value="4">Chaperia Trasera</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Detalle</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Servicio</th>
                                                    <th>Importe</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>Pulido Completo</td>
                                                    <td>150</td>
                                                    <td><button type="button" class="btn btn-round btn-info" style="border-color: #FF7B00; background-color: #FF7B00"><i class="fa fa-minus"></i></button></td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td>Pintura General</td>
                                                    <td>500</td>
                                                    <td><button type="button" class="btn btn-round btn-info" style="border-color: #FF7B00; background-color: #FF7B00"><i class="fa fa-minus"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="row" style="text-align: center;">
                                <div class="col-3">
                                    
                                </div>
                                <div class="col-6">
                                    <h4>Total: 650 Bs.</h4>
                                </div>
                                <div class="col-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row" style="text-align: center;">
                <div class="col-3">
                    
                </div>
                <div class="col-sm-3">
                   <button type="button" class="btn btn-primary" style="border-color: #FF7B00; background-color: #FF7B00">Guardar</button>
                </div>
                <div class="col-sm-3">
                   <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
                <div class="col-3">
                    
                </div>
            </div>
        </div>
    </div>
</div>