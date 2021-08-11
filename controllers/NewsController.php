<?php

class NewsController {

    public function actionShowPost($newspostId) {

        $newspost = News::getNewspostById($newspostId);
        $total = News::getNewspostsCount();

        // Создаем объект Pagination - постраничная навигация
        $newspostPagination = new Pagination($total, $newspostId, 1, '');

        require_once (ROOT.'/views/newspost.php');
        return true;
    }

    public function actionNewspostContent($newspostId) {
        $newspost = News::getNewspostById($newspostId);
        $total = News::getNewspostsCount();

        // Создаем объект Pagination - постраничная навигация
        $newspostPagination = new Pagination($total, $newspostId, 1, '');

        require_once (ROOT.'/views/layouts/newspost-content.php');
        return true;
    }
}
