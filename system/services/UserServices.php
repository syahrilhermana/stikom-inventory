<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:32
 */

include MODEL_PATH.'User.php';

class UserServices
{
    private $_table;

    function __construct() {
        $this->_table = 'tbl_user';
    }

    public function get_list() {
        $db = Database::getInstance();
        $statement = 'select * from tbl_user';

        if ($result = $db->query($statement)) {
            return $result->fetchAll(PDO::FETCH_CLASS, User::class);
        }
    }

    public function login(User $user) {
        $db = Database::getInstance();
        $statement = 'select * from tbl_user where uid = $user->uid and password = $user->password';

        if ($result = $db->query($statement)) {
            return $result->fetch(PDO::FETCH_CLASS, 'User');
        }
    }

    public function save(User $user) {
        if(isset($user->id)) {
            $this->update($user);
        } else {
            $this->insert($user);
        }
    }

    public function delete() {
        //
    }

    private function insert(User $user) {
        $db = Database::getInstance();

        $params = array(
            'uid'    => $user->uid,
            'pwd'    => $user->password,
            'dept'   => $user->department,
            'status' => 'A'
        );
        $db->prepare('insert into $this->_table (uid, password, department, status) values(:uid, :pwd, :dept, :status)', $params);
    }

    private function update() {
        $db = Database::getInstance();
        $db->prepare('', '');
    }
}