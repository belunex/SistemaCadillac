<div clas="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">Lista de Usuarios</h3>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover" style="text-align: center;">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nombre Completo</th>
                    <th>CI</th>
                    <th>Fecha de Contratacion</th>
                    <th>Numero Celular</th>
                    <th>Direccion</th>
                    <th>Gmail</th>
                    <th>Rol</th>
                    <th>Fecha de Registro</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $indice = 1;
                    foreach ($listaUsuarios->result() as $row) {
                ?>
                    <tr>
                        <td><?php echo $indice ?></td>
                        <td><?php echo $row->tipoServicio ?></td>

                        <td><?php echo $row->ci ?></td>
                        <td><?php echo $row->fechaContratacion ?></td>
                        <td><?php echo $row->numeroTelefono ?></td>
                        <td><?php echo $row->ci ?></td>
                        <td><?php echo $row->ci ?></td>
                        <td><?php echo $row->fechaRegistro ?></td>
                        <td>
                            <div  class="row">
                                <div  class="col-sm-6">
                                    <?php
                                        echo form_open_multipart('administrador/modificarServicio')
                                    ?>
                                    <input type="hidden" name="idServicio" value="<?php echo $row->idServicio; ?>">
                                    <button type="submit" class="btn btn-success" style="border-color: #7AB700; background-color: #7AB700"><span class="fa fa-pencil"></span></button>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                                <div  class="col-sm-6">
                                    <?php
                                        echo form_open_multipart('administrador/deshabilitarServicio')
                                    ?>
                                    <input type="hidden" name="idServicio" value="<?php echo $row->idServicio; ?>">
                                    <button type="submit" class="btn btn-success" style="border-color: #FF7B00; background-color: #FF7B00"><span class="fa fa-trash"></span></button>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    $indice++;
                    }
                ?>
            </tbody>
        </div>
    </div>
</div>