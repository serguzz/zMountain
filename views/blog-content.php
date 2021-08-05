<?php foreach ($blogposts as $blogpost): ?>

    <div class="blogpost-container">
      <div class="blogpost-header">
        <div class="blogpost-cover">
          <img src="<?php echo SUBDOMAIN;?>/template/images/blog/<?php echo $blogpost["image"];?>">
        </div>
      </div>
      <div class="blogpost-body">
        <div class="blogpost-title">
          <h1><a href="<?php echo SUBDOMAIN;?>/blogpost/<?php echo $blogpost["id"];?>"><?php echo $blogpost["title"];?></a></h1>
        </div>
        <div class="blogpost-author">
          <p>by <a href="#"><?php echo $blogpost["author"]; ?> </a></p>
        </div>
        <div class="blogpost-text">
          <p><?php echo $blogpost["short_content"];?>
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
          <li class="published-date"><?php echo date("j F Y", strtotime($blogpost["created_at"])); ?></li>

        </ul>
      </div>
    </div> <!-- blogpost-container-->
  <?php endforeach; ?>

  <div class="pagination-container">
    <?php	echo $blogPagination->get(); ?>
  </div>
