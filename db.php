<?php

// 1. Подключение файлов системы
define('ROOT', dirname(__FILE__));

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

   // виводить всі таблиці в БД
   public static function listTables()
   {
       $db = Db::getConnection();
       $result = $db->query("SHOW TABLES");

       while ($row = $result->fetch(PDO::FETCH_NUM)) {
          echo $row[0]."<br>";
      }
   }
 }

// Класс для роботи з таблицею blogposts в БД
class BlogPost {

    public static function createBlogPostsTable() {
        $db = Db::getConnection();
        $sql = "CREATE TABLE IF NOT EXISTS `travelea_travelearth`.`countries2` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL DEFAULT '_blog_post_title_' , `number` TEXT NOT NULL , `number2` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $result = $db->prepare($sql);
        return $result->execute();
    }

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

//BlogPost::addBlogPost('testTitle', 'testDesc', 'testContent');

BlogPost::createBlogPostsTable();
print_r(Db::listTables());
