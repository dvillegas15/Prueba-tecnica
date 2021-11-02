
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Miga de pan] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Registrar Pregunta</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('inicio'); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?php echo $titulo?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Miga de Pan  ] end -->

    <!-- Captura de variables -->
        <?php 
            if(isset($pregunta)){
                $cambioBoton=true;
                $id = $pregunta[0]["id"];
                $texto = $pregunta[0]["text"];
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
                        <form id="form-question">
                                <div class="tab-pane active show" id="progress-t-tab1">
                                     <input value="<?= $id; ?>" type="hidden" id="id" name="id" class="form-control">
                                        <div class="form-group row">
                                            <label for="progress-t-nombre" class="col-sm-3 col-form-label">Pregunta</label>
                                             <div class="col-sm-9">
                                                <input value="<?= $texto; ?>" type="text" id="question" name="question" class="form-control"  placeholder="Ingrese una Pregunta">
                                             </div>
                                        </div>
                                </div>
                                <div class="col-sm-12 text-md-right">
                                    <?php if($cambioBoton==true): ?>
                                        <input id="btnEditar" type="button" class="btn btn-success has-ripple" value="Editar"/>
                                    <?php else: ?>
                                        <input id="btnCrear" type="button" class="btn btn-success has-ripple" value="Agregar"/>
                                    <?php endif; ?>
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

