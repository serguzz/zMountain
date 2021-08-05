<!-- in the sence of style the newspost page is the same as blogpost page.
 That's why all classes are "blog" connected.
 The difference though is in logic.
 All the variables refer to News Model and DB table instead of Blog model on Blog pages.

-->

<div class="blogpost-container">
  <div class="blogpost-header">
    <div class="blogpost-cover">
      <img src="<?php echo SUBDOMAIN;?>/template/images/news/<?php echo $newspost["image"];?>">
    </div>
  </div>
  <div class="blogpost-body">
    <div class="blogpost-title">
      <h1><a href="#"><?php echo $newspost["title"];?>
          </a>
      </h1>
    </div>
    <div class="blogpost-author">
      <p>by <a href="#"><?php echo $newspost["author"]; ?> </a></p>
    </div>

    <div class="blogpost-text">
      <p>
        <?php echo $newspost["content"];?>
      </p>
    </div>
    <div class="blogpost-tags">
        <li><a href="#">Lorem</a></li>
        <li><a href="#">dfgfg</a></li>
        <li><a href="#">nbnnn nnn</a></li>
        <li><a href="#">dfgfg</a></li>
        <li><a href="#">dfgfg</a></li>
    </div>
  </div>

  <div class="blogpost-footer">
    <ul>
      <li class="published-date"><?php echo date("j F Y", strtotime($newspost["created_at"])); ?></li>

    </ul>
  </div>
</div> <!-- blogpost-container-->
<div class="pagination-container">
  <?php	echo $newspostPagination->get(); ?>
</div>
