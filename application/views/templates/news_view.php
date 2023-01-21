<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <div id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="postlist" style="margin-top: 50px;">
                        <?php foreach ( $news as $posts => $post ) : ?>
                           <div class="panel">
                              <div class="panel-heading">
                                 <div class="text-left">
                                       <div class="row">
                                          <div class="col-sm-9">
                                             <h3 class="pull-left"><?=$post['title']?></h3>
                                          </div>
                                          <div class="col-sm-3">
                                             <h4 class="pull-right">
                                                   <small><em><?=$post['date']?></em></small>
                                             </h4>
                                          </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="panel-body">
                                 <a href="#" class="thumbnail">
                                    <img alt="Image" style="width: 100%;" src="<?php echo base_url('assets/images/news/'.$post['image']); ?>" />
                                 </a>
                                 <br>
                                 <p style="margin-top: 20px;"><?=$post['description'];?></p>
                              </div>
                           </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
