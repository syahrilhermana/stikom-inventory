<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:32
 */

class User
{
    public $id;
    public $uid;
    public $password;
    public $department;
    public $status;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}