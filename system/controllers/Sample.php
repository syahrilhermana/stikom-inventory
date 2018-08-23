<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 13:41
 */

include SERVICE_PATH.'UserServices.php';

class Sample
{
    function __construct() {
        //
    }

    function index() {
        $data = array(
            'title' => 'Sample'
        );

        $view = new Template();
        $view->render('sample/index', $data);
    }

    function foo($p1, $p2) {
        $data = array(
            'title'     => 'Sample With Param',
            'param1'    => $p1,
            'param2'    => $p2
        );

        $view = new Template();
        $view->render('sample/param', $data);
    }

    function data() {
        $service = new UserServices();

        $data = array(
            'title'     => 'Sample connect to DB',
            'users'  => $service->get_list()
        );

        $view = new Template();
        $view->render('sample/data', $data);
    }
}