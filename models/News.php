<?php

class News {

    const SHOW_BY_DEFAULT = 6;

    // returns total count of news in news table
    public static function getNewspostsCount()  {
        // code...
        $db = Db::getConnection();
        $result = $db->query("SELECT count(id) AS count FROM news");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }

    public static function getNewspostById($id) {
        $id = intval($id);
        if ($id >= 0) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id = '.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getAllNewsposts() {

        $db = Db::getConnection();
        $newsposts = array();

        $result = $db->query('SELECT * FROM news');
        $i = 0;
        while ($row = $result->fetch()) {
            $newsposts[$i]['id'] = $row['id'];
            $newsposts[$i]['title'] = $row['title'];
            $newsposts[$i]['author'] = $row['author'];
            $newsposts[$i]['short_content'] = $row['short_content'];
            $newsposts[$i]['content'] = $row['content'];
            $newsposts[$i]['image'] = $row['image'];
            $newsposts[$i]['tags'] = $row['tags'];
            $newsposts[$i]['created_at'] = $row['created_at'];
            $i++;
        }

        return $newsposts;
    }

    // returns newsposts list of "quantity" from the table "newsposts" starting from "number"
    public static function getNewspostsOnPage($page = 1, $quantity = self::SHOW_BY_DEFAULT) {

        $quantity = intval($quantity);
        $offset = ($page-1)*$quantity;

        $db = Db::getConnection();
        $newspostsList = array();
        $result = $db->query('SELECT * FROM news ORDER BY id DESC '
                  . 'LIMIT '.$quantity
                  . ' OFFSET '.$offset);
        $i = 0;
        while ($row = $result->fetch()) {
            $newspostsList[$i]['id'] = $row['id'];
            $newspostsList[$i]['title'] = $row['title'];
            $newspostsList[$i]['author'] = $row['author'];
            $newspostsList[$i]['short_content'] = $row['short_content'];
            $newspostsList[$i]['content'] = $row['content'];
            $newspostsList[$i]['image'] = $row['image'];
            $newspostsList[$i]['tags'] = $row['tags'];
            $newspostsList[$i]['created_at'] = $row['created_at'];
            $i++;
          }
        return $newspostsList;
    }

    // returns newsposts list of "quantity" from the table "newsposts" starting from "number"
    public static function getNewspostsOnPageByTag($tag, $page = 1, $quantity = self::SHOW_BY_DEFAULT) {

        $quantity = intval($quantity);
        $offset = ($page-1)*$quantity;

        $db = Db::getConnection();
        $newspostsList = array();
        $result = $db->query('SELECT * FROM news WHERE tags = "'
                  . $tag .'" ORDER BY id DESC '
                  . 'LIMIT '.$quantity
                  . ' OFFSET '.$offset);
        $i = 0;
        while ($row = $result->fetch()) {
            $newspostsList[$i]['id'] = $row['id'];
            $newspostsList[$i]['title'] = $row['title'];
            $newspostsList[$i]['author'] = $row['author'];
            $newspostsList[$i]['short_content'] = $row['short_content'];
            $newspostsList[$i]['content'] = $row['content'];
            $newspostsList[$i]['image'] = $row['image'];
            $newspostsList[$i]['tags'] = $row['tags'];
            $newspostsList[$i]['created_at'] = $row['created_at'];
            $i++;
          }
        return $newspostsList;
    }

}
