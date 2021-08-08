<?php

class Blog {

    const SHOW_BY_DEFAULT = 2;

    // returns total products in all procduct table
    public static function getBlogpostsCount()  {
        // code...
        $db = Db::getConnection();
        $result = $db->query("SELECT count(id) AS count FROM blogposts");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }

    public static function getBlogpostById($id) {
        $id = intval($id);
        if ($id >= 0) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM blogposts WHERE id = '.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getAllBlogposts() {

        $db = Db::getConnection();
        $blogposts = array();

        $result = $db->query('SELECT * FROM blogposts');
        $i = 0;
        while ($row = $result->fetch()) {
            $blogposts[$i]['id'] = $row['id'];
            $blogposts[$i]['title'] = $row['title'];
            $blogposts[$i]['author'] = $row['author'];
            $blogposts[$i]['short_content'] = $row['short_content'];
            $blogposts[$i]['content'] = $row['content'];
            $blogposts[$i]['image'] = $row['image'];
            $blogposts[$i]['created_at'] = $row['created_at'];
            $i++;
        }

        return $blogposts;
    }

    // returns blogposts list of "quantity" from the table "blogposts" starting from "number"
    public static function getBlogpostsOnPage($page = 1, $quantity = self::SHOW_BY_DEFAULT) {

              $quantity = intval($quantity);
              $offset = ($page-1)*$quantity;

              $db = Db::getConnection();
              $blogpostsList = array();
              $result = $db->query('SELECT * FROM blogposts '
                        . 'ORDER BY id DESC '
                        . 'LIMIT '.$quantity
                        . ' OFFSET '.$offset);
              $i = 0;
              while ($row = $result->fetch()) {
                $blogpostsList[$i]['id'] = $row['id'];
                $blogpostsList[$i]['title'] = $row['title'];
                $blogpostsList[$i]['author'] = $row['author'];
                $blogpostsList[$i]['short_content'] = $row['short_content'];
                $blogpostsList[$i]['content'] = $row['content'];
                $blogpostsList[$i]['image'] = $row['image'];
                $blogpostsList[$i]['created_at'] = $row['created_at'];
                $i++;
              }
              return $blogpostsList;
            }



}
