<!-- Vista en donde se listan las opciones registradas -->
<!-- [ Main Content ] inicio -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ miga de pan ] inicio -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Opciones de Respuesta</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('inicio'); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('votacion'); ?>">Listado</a></li>
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
                            <label class="col-sm-3 col-form-label">Pregunta:</label>
                                <div class="col-sm-9">
                                    <input value="<?= $pregunta[0]["text"];?>" type="text" id="question" name="question" class="form-control" readonly>
                                    <input type="hidden" value="<?= $pregunta[0]["id"];?>" type="text" id="idPregunta" name="idPregunta" class="form-control" readonly>

                                </div><br>
                       
                                <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                        <!-- Encabezado de la tabla -->
                                        <thead>
                                            <tr>
                                                <th>Sleccione una opción</th>
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
                                                    <td>
                                                        <input type="radio" name= "radio" id="<?= $id;?>" >
                                                        <label><?=$texto;?></label></td>
                                                    </tr>
                                                <?php endfor; ?>
                                        </tbody>
                                    </table>
                                 </div>
                                 <br>
                                 <div class="col-sm-12 text-md-center">
                                     <input id="btnGuardar" type="button" class="btn btn-success has-ripple" value="Guardar"/>
                                 </div>
                           
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
  