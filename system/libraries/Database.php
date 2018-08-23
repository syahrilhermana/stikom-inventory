<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 21:00
 */

class Database
{
    private $_db;
    static $_instance;

    private function __construct() {
        $this->_db = new PDO('mysql:host=localhost;dbname=inventory', 'root', 'admin');
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql) {
        return $this->_db->query($sql);
    }

    public function prepare($sql, $params) {
        $statement = $this->_db->prepare($sql);
        return $statement->execute($params);
    }
}