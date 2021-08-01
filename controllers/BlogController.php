<?php

class BlogController {

    public function actionIndex($page = 1) {

        $blogposts = array();
        $blogposts = Blog::getBlogpostsOnPage($page);
        $total = Blog::getBlogpostsCount();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Blog::SHOW_BY_DEFAULT, 'page-');

        require_once (ROOT.'/views/blog.php');
        return true;
    }

    public function actionPageContent($page = 1) {
      $blogposts = array();
      $blogposts = Blog::getBlogpostsOnPage($page);
      $total = Blog::getBlogpostsCount();

      // Создаем объект Pagination - постраничная навигация
      $pagination = new Pagination($total, $page, Blog::SHOW_BY_DEFAULT, 'page-');

      require_once (ROOT.'/views/blog-content.php');
      return true;

    }

    public function actionShowPost($blogpostId) {

        $blogpost = Blog::getBlogpostById($blogpostId);
        require_once (ROOT.'/views/blogpost.php');
        return true;
    }

}
