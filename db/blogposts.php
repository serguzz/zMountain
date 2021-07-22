<?php

// 1. Подключение файлов системы
define('ROOT', '..');

 /**
  * Класс Db
  * Компонент для работы с базой данных
  */
 class Db
 {

   /**
    * Устанавливает соединение с базой данных
    * @return \PDO <p>Объект класса PDO для работы с БД</p>
    */
   public static function getConnection()
   {
     // Получаем параметры подключения из файла
     $paramsPath = ROOT.'/config/db_params.php';

     $params = include($paramsPath);

     // Устанавливаем соединение
     $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
     $db = new PDO($dsn, $params['user'], $params['password']);

     // Задаем кодировку
     //$db->exec("set names utf8");
      return $db;
   }
 }

// Класс для роботи з таблицею blogposts в БД
class Blogpost {

    const SHOW_BY_DEFAULT = 10;

    // creates BlogPosts tables if NOT EXISTS
    public static function createBlogPostsTable() {
        $db = Db::getConnection();
        $sql = "CREATE TABLE IF NOT EXISTS `travelea_travelearth`.`countries2` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL DEFAULT '_blog_post_title_' , `number` TEXT NOT NULL , `number2` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $result = $db->prepare($sql);
        return $result->execute();
    }

    // returns blogposts list of "quantity" from the table "blogposts" starting from "number"
    public static function blogpostsList($from_number = 0, $quantity = self::SHOW_BY_DEFAULT) {
              $quantity = intval($quantity);
              $db = Db::getConnection();
              $blogpostsList = array();
              $result = $db->query('SELECT * FROM blogposts '
                        . 'LIMIT '.$quantity);
              $i = 0;
              while ($row = $result->fetch()) {
                $blogpostsList[$i]['id'] = $row['id'];
                $blogpostsList[$i]['title'] = $row['title'];
                $blogpostsList[$i]['author'] = $row['author'];
                $blogpostsList[$i]['short_content'] = $row['short_content'];
                $blogpostsList[$i]['content'] = $row['content'];
                $blogpostsList[$i]['image'] = $row['image'];
                $i++;
              }
              return $blogpostsList;
            }


    // add a blog post record in the table "blogposts"
    public static function addBlogPost($title, $short_content, $content) {

          $db = Db::getConnection();

          $sql = 'INSERT INTO blogposts (title, short_content, content) '
                  . 'VALUES (:title, :short_content, :content)';

          $result = $db->prepare($sql);
          $result->bindParam(':title', $title, PDO::PARAM_STR);
          $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
          $result->bindParam(':content', $content, PDO::PARAM_STR);

          return $result->execute();

      }
}




$data = [
  "data" => 1,
  "blogpost_title" => "Hello I am FIRST title!!",
  "blogpost_text" => "Hello I am FIRST text!"
];

$data = Blogpost::blogpostsList();

header('Content-type: application/json');
//print_r(json_encode($data));
echo json_encode( $data );
