

<!-- section -4 content:   content of the section with services descriptions
  includes invisible modal window with service description - content filled with JS -->
<!-- Модальне вікно загальне  -->
<div class="modal" id="services_modal">
  <div class="modal_content">
    <button id="services_modal_closer" class="modal_closer"><img src="<?php echo SUBDOMAIN;?>/template/images/close.png" width="35" alt="close"></button>
    <!-- Контент модального окна -->
    <img id="services_modal_img" class="services_modal_img" src="" alt="">
    <h1 id="services_modal_title" class="modal_title">Тестовий похід</h1>
    <p id="services_modal_description" class="modal_description">Тестове описання</p>
    <a id="services_modal_button" class="button button-skin button-service" href="tel:+380950137282">Хочу в похід</a>
  </div>
</div>
<!-- End of services modal window -->


<div class="content">
  <?php for ($i=0; $i<$servicesRowsCount; $i++) { ?>
    <div class="row wrap-box">
      <?php
      for ($j=0; ($j<3)&&((3*$i+$j)<$servicesCount); $j++) {
        $service = $services[3*$i+$j];
        ?>
        <div class="column sm-1-3">
          <div class="wrap-col">
            <div class="box-entry">
              <div style="border-radius: 10px;" class="box-entry-inner services_modal_opener" data-id="<?php echo $service["id"];?>">
              <img src="template/images/<?php echo $service["tag"];?>/<?php echo $service["front_image"];?>" class="img-responsive"/>
              <div class="entry-details">
                  <div class="entry-des">
                    <span><a href="#">літо 2021</a></span>
                    <h3><a href="#"><?php echo $service["front_title"];?></a></h3>
                      <p><?php echo $service["short_description"];?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  <?php } ?>

</div>

<!-- script for showing modal window with full description of a service -->
<script type="text/javascript" src="template/js/services.js"></script>
