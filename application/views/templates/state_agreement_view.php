<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <div id="state-agreement">
       <div class="container">
            <div class="row">
                <section class="mb-5">
                    <div class="container">
                        <div class="row title py-3">
                            <div class="col-md-12">
                                <h5><strong>Filtrar resultados</strong></h5>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <strong><p>Categoría</p></strong>
                                                <a href="<?php echo base_url() ?>convenios/estatales/all/"> <li>Todas</li></a>
                                                <?php foreach ( $categories as $states => $state ) : ?>
                                                    <a href="<?php echo base_url() ?>convenios/estatales/<?=$state['id'];?>/"> <li><?=$state['name_category'] ?></li></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <?php foreach ( $description as $statesDescriptions => $stateDescription ) : ?>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?php echo base_url('assets/images/agreement/national-agreememt/national.png'); ?>">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h5><?=$stateDescription['name_category']; ?></h5>
                                                            <small><?=$stateDescription['sede']; ?></small>
                                                            <br>
                                                            <i><small><?=$stateDescription['address']; ?></small></i>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <small><b>Porcentaje</b>: <?=$stateDescription['percentaje']; ?></small>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!--<div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?php echo base_url('assets/images/agreement/national-agreememt/national.png'); ?>">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h5>Convenio Estatal </h5>
                                                        <small>Ciudad de México</small>
                                                        <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <small>Firmado en Nov 27, 2017</small>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?php echo base_url('assets/images/agreement/national-agreememt/national.png'); ?>">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h5>Convenio Estatal </h5>
                                                        <small>Ciudad de México</small>
                                                        <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <small>Firmado en Nov 27, 2017</small>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
       </div>
    </div>
</html>