<section class="content-box box-4">
  <div class="zerogrid">
    <div class="row wrap-box"><!--Start Box-->
      <div class="header">
        <h2>Новини</h2>
        <p class="intro">Що нового за останній тиждень, місяць, рік в світі туризму та водних видів спорту <br>Звіти про походи та поїздки, тренування та сплави.</p>
      </div>
      <div class="content">
        <div class="column sm-1-3">
          <div class="wrap-col">
            <div class="box-entry">
              <div class="box-entry-inner" style="">
                <img src="<?php echo SUBDOMAIN;?>/template/images/2.jpg" class="img-responsive"/>
                <div class="entry-details">
                  <div class="entry-des">
                    <span><a href="#">08th Apr 2017</a></span>
                    <h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column sm-1-3">
          <div class="wrap-col">
            <div class="box-entry">
              <div class="box-entry-inner">
                <img src="<?php echo SUBDOMAIN;?>/template/images/3.jpg" class="img-responsive"/>
                <div class="entry-details">
                  <div class="entry-des">
                    <span><a href="#">08th Apr 2017</a></span>
                    <h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column sm-1-3">
          <div class="wrap-col">
            <div class="box-entry">
              <div class="box-entry-inner">
                <img src="<?php echo SUBDOMAIN;?>/template/images/4.jpg" class="img-responsive"/>
                <div class="entry-details">
                  <div class="entry-des">
                    <span><a href="#">08th Apr 2017</a></span>
                    <h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- one more row -->
    <?php for ($j=0; $j<ceil($newspostsCount/3); $j++) {
    ?>
      <div class="row wrap-box">
        <?php for ($i=0; ($i<3)&&((3*$j+$i) < $newspostsCount); $i++) {

            $newspost = $newsposts[3*$j+$i]; ?>
            <div class="column sm-1-3">
              <div class="wrap-col">
                <div class="box-entry">
                  <div onclick="location.href='<?php echo SUBDOMAIN;?>/newspost/<?php echo $newspost["id"];?>';" class="box-entry-inner">
                    <img src="<?php echo SUBDOMAIN;?>/template/images/<?php echo ($newspost["image"]) ? "news/".$newspost["image"] : "icons/no_image.png" ;?>" class="img-responsive"/>
                    <div class="entry-details">
                      <div class="entry-des">
                        <span><a href="#"><?php echo date("j F Y", strtotime($newspost["created_at"]));?></a></span>
                        <h3><a href="<?php echo SUBDOMAIN;?>/newspost/<?php echo $newspost["id"];?>"><?php echo $newspost["title"];?></a></h3>
                        <p><?php echo $newspost["short_content"];?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <?php  } // endfor ?>

      </div>  <!-- end of a row -->
    <?php } ?>
  </div>
</section>
