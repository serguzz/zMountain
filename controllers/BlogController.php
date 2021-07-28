<?php

class BlogController {

    public function actionIndex() {

        $blogposts = Blog::getAllBlogposts();
        

        require_once (ROOT.'/views/blog.php');
        return true;
    }

    public function actionShowPost($blogpostId) {

        $blogpost = Blog::getBlogpostById($blogpostId);
        require_once (ROOT.'/views/blogpost.php');
        return true;
    }

}
