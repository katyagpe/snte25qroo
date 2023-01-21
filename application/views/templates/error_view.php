<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <div id="contact">
        <div class="container-fluid">
            <div class="row">
                <div id="mailbox" class="col-md-8">
                    <div class="contact-form-content">
                        <div class="alert alert-error" role="alert">
                        <h4 class="alert-heading">Oh! a ocurrido un problema</h4>
                        <p>Revisa de nuevo tú correo</p>
                        <hr>
                        <p class="mb-0">Estamos a sus ordenes</p>
                        <a href="<?php echo base_url() ?>contacto/"><button type="button" class="btn btn-info" style="margin-top: 25px; margin-bottom: 25px;">Regresar</button></a>
                        </div>
                    </div>
                </div>
                <div id="information" class="col-md-4">
                    <div class="contact-info text-center">
                        <div class="title text-center">
                            <span>Información de contacto</span>
                            <h2>Detalles</h2>
                        </div>
                        <div class="single-contact-info">
                            <h4>Dirección</h4>
                            <p>
                                Lib. de Chetumal 188, Sahop, 77017 Chetumal, Q.R.
                            </p>
                        </div>
                        <div class="single-contact-info">
                            <h4>Teléfono</h4>
                            <p>
                                <a href="tel:+019838331777">01 983 833 17 77</a>
                                <br>
                                <a href="tel:+019838321386">01 983 832 13 86</a>
                            </p>
                        </div>
                        <div class="single-contact-info">
                            <h4>Correo electrónico</h4>
                            <p>
                                aquivaelcorreo@correo.com
                            </p>
                        </div>
                        <div class="single-contact-info">
                            <h4>Siguenos</h4>
                            <div class="social">
                                <a href="#" class="fab fa-twitter hvr-pulse"></a>
                                <a href="#" class="fab fa-facebook-f hvr-pulse"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="map">
                    <h2>Ubicación</h2>
                    <div class="single-contact-info">
                        <div class="social">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.189040054135!2d-88.29650588527927!3d18.520357587409162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5ba483511d0c6d%3A0x2b98752b7528dc2c!2sSeccion%2025%20SNTE!5e0!3m2!1sen!2smx!4v1667060756453!5m2!1sen!2smx"
                        width="100%"
                        height="600"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</html>