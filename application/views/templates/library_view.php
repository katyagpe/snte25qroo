<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <div id="library">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="https://snte.org.mx/seccion25/legislacion/">
                        <div class="card-information national">
                            <div class="top">
                                <div class="wrapper">
                                    <h1 class="heading">Biblioteca Nacional</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="<?php echo base_url() ?>biblioteca-estatal">
                        <div class="card-information state">
                            <div class="top">
                                <div class="wrapper">
                                    <h1 class="heading">Biblioteca Estatal</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="#">
                        <img src="<?php echo base_url('assets/images/leyesnacionales.jpeg'); ?>" class="thumb" style="width: 100%; margin-bottom: 50px;" />
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://www.congresoqroo.gob.mx/leyes/">
                        <img src="<?php echo base_url('assets/images/leyesestatales.jpeg'); ?>" class="thumb" style="width: 100%; margin-bottom: 50px;" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</html>