<?php

class Service {

    const SHOW_BY_DEFAULT = 6;

    public static function getServiceById($id) {
        $id = intval($id);
        if ($id >= 0) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM services WHERE id = '.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getServicesList() {

        $db = Db::getConnection();
        $servicesList = array();

        $result = $db->query('SELECT * FROM services');
        $i = 0;
        while ($row = $result->fetch()) {
            $servicesList[$i]['id'] = $row['id'];
            $servicesList[$i]['tag'] = $row['tag'];
            $servicesList[$i]['front_title'] = $row['front_title'];
            $servicesList[$i]['title'] = $row['title'];
            $servicesList[$i]['short_description'] = $row['short_description'];
            $servicesList[$i]['description'] = $row['description'];
            $servicesList[$i]['front_image'] = $row['front_image'];
            $servicesList[$i]['image'] = $row['image'];
            $servicesList[$i]['button_sign'] = $row['button_sign'];
            $i++;
        }

        return $servicesList;
    }

    // returns services list by "tag" of "quantity" from the table "services" starting from "number"
    public static function getServicesByTag($tag, $page = 1, $quantity = self::SHOW_BY_DEFAULT) {

        $quantity = intval($quantity);
        $offset = ($page-1)*$quantity;

        $db = Db::getConnection();
        $services = array();
        $result = $db->query('SELECT * FROM services WHERE tag = "'
                  . $tag .'" ORDER BY id '
                  . 'LIMIT '.$quantity
                  . ' OFFSET '.$offset);
        $i = 0;
        while ($row = $result->fetch()) {
            $services[$i]['id'] = $row['id'];
            $services[$i]['tag'] = $row['tag'];
            $services[$i]['title'] = $row['title'];
            $services[$i]['front_title'] = $row['front_title'];
            $services[$i]['short_description'] = $row['short_description'];
            $services[$i]['description'] = $row['description'];
            $services[$i]['front_image'] = $row['front_image'];
            $services[$i]['image'] = $row['image'];
            $services[$i]['button_sign'] = $row['button_sign'];
            $i++;
          }
        return $services;
    }


}
