
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Miga de pan] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Registrar Opción</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('inicio'); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('general'); ?>">Volver</a></li>
                            <li class="breadcrumb-item"><a href="#!"><?php echo $titulo?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Miga de Pan  ] end -->

    <!-- Captura de variables -->
        <?php 
             $id = $idQ;
                if(isset($consulta)){
                    $cambioBoton=true;
                    $id = $consulta[0]["id"];
                    $texto = $consulta[0]["text"];
                }else{
                    $cambioBoton=false;
                    $id = '';
                    $texto = '';
                }
        ?>

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Smart-Wizard ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <hr>
                        <form id="form-option">
                                <div class="tab-pane active show" id="progress-t-tab1">
                                    <input value="<?= $id; ?>" type="hidden" id="id" name="id" class="form-control">
                                     <input value="<?= $idQ; ?>" type="hidden" id="idQ" name="idQ" class="form-control">
                                        <div class="form-group row">
                                            <label for="progress-t-nombre" class="col-sm-3 col-form-label">Opción de Respuesta:</label>
                                                <div class="col-sm-9">
                                                    <input value="<?= $texto; ?>" type="text" id="option" name="option" class="form-control"  placeholder="Ingrese una Opción">
                                                </div>
                                        </div>
                                     </div>
                                    <div class="col-sm-12 text-md-right">
                                        <input id="btnCrearOpcion" type="button" class="btn btn-success has-ripple" value="Guardar"/>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Smart-Wizard ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

