<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Galeria de videos</h1>
            <p>
                <a href="<?php echo base_url() ?>multimedia/" class="btn btn-secondary my-2">Fotos</a>
                <a href="#" class="btn btn-secondary my-2" style="background-color: #ff7b3e; border-color: #ffffff;">Videos</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <iframe
                            width="348"
                            height="255"
                            src="https://www.youtube.com/embed/4X4gOxgem1A"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                        <div class="card-body">
                            <h5 style="font-size: 14px; text-align: center;">Comprometidos con la profesionalización de todas y todos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <iframe
                            width="348"
                            height="255"
                            src="https://www.youtube.com/embed/L12-5lfPiTI"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                        <div class="card-body">
                            <h5 style="font-size: 14px; text-align: center;">Discurso Secretario General de la Sección 25 del SNTE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <iframe
                            width="348"
                            height="255"
                            src="https://www.youtube.com/embed/f-vejCGFfAo"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                        <div class="card-body">
                            <h5 style="font-size: 14px; text-align: center;">Firma de convenio de descuento con LOL-HA</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <iframe
                            width="348"
                            height="255"
                            src="https://www.youtube.com/embed/hTMZBy9qN2A"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                        <div class="card-body">
                            <h5 style="font-size: 14px; text-align: center;">Resumen de las actividades del secretario general de la sección 25 del SNTE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <iframe
                            width="348"
                            height="255"
                            src="https://www.youtube.com/embed/l-LeOoJaIm4"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                        <div class="card-body">
                            <h5 style="font-size: 14px; text-align: center;">Segundo resumen de actividades del secretario general de la sección 25 del SNTE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
