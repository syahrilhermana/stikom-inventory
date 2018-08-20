<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 13:41
 */

class Sample
{
    public function index()
    {
        $data = array(
            'title' => 'Sample Page'
        );

        $view = new Template();
        print $view->render('sample', $data);
    }

    public function foo($bar)
    {
        echo "Hello, this is Foo method with argument $bar";
    }
}