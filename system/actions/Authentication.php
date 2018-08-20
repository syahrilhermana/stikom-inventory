<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:44
 */

include "../libraries/Database.php";
include "../services/UserServices.php";

class Authentication
{
    private $uid;
    private $password;

    function __construct() {
        $this->uid = isset($_POST['uid']) ? $_POST['uid'] : null;
        $this->password = isset($_POST['pwd']) ? $_POST['pwd'] : null;
    }

    function validate() {
        if (empty($this->uid) || empty($this->password)) {
            throw new Exception("Empty Post not allowed");
        }
    }

    function login() {
        //
    }
}

// init
$auth = new Authentication();
$service = new UserServices();

// run validation
if(!empty($_POST))
{
    $auth->validate();
}