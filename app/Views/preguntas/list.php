<!-- Front end General, se listan las preguntas por medio de una tabla -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ miga de pan ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Preguntas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('inicio'); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Listado</a></li>
                            <li class="breadcrumb-item"><a href="#!">General</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <!-- [ miga de pan ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple"  onclick="location.href='registrar'"><i class="feather icon-plus"></i>Nueva Pregunta</button><br><br>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                            <!-- Encabezado de la tabla -->
                                <thead>
                                    <tr>
										<th>Pregunta</th>
                                        <th>Gestión</th>
                                    </tr>
                                </thead>
                                <!-- Fin del encabezado de la tabla -->
                                    <tbody>
                                         <?php for ($i=0; $i < count($lista); $i++): ?> 
                                             <?php 
                                                $texto = $lista[$i]["text"];
                                                $id = $lista[$i]['id'];
                                            ?>
                                            <tr>
                                                <td><?= $texto;?></td>
                                                <td>
                                                <a class="btn btn-info btn-sm" href="<?php echo base_url()."/Pregunta/registrar?idByUrl=".$id;?>"><i class="feather icon-edit" ></i>Editar</a>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="eliminar(<?= $id;?>)">
                                                    <i class="feather icon-trash-2"></i>&nbsp;Eliminar
                                                </button>  
                                                </td>
                                            </tr>
                                         <?php endfor; ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
  