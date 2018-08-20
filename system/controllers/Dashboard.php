<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 13:41
 */

class Dashboard
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard'
        );

        $view = new Template();
        $view->render('dashboard', $data);
    }
}