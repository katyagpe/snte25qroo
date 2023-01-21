<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <div id="agreement">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="<?php echo base_url() ?>convenios/nacionales">
                        <div class="card-information national">
                            <div class="top">
                                <div class="wrapper">
                                    <h1 class="heading">Convenios Nacionales</h1>
                                    <p class="temp">
                                        <span class="temp-value">20</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="<?php echo base_url() ?>convenios/estatales/all">
                        <div class="card-information state">
                            <div class="top">
                                <div class="wrapper">
                                    <h1 class="heading">Convenios Estatales</h1>
                                    <p class="temp">
                                    <?php foreach ( $total as $quantities => $quantity ) : ?>
                                        <span class="temp-value"><?=$quantity['total']; ?></span>
                                    <?php endforeach; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</html>