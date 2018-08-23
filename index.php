<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 9:54
 */

/*
 * ----------------------------------------------------------
 * DEFINE CONSTANT
 * ----------------------------------------------------------
 */
    define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
    define('VIEWPATH', 'WEB-INF/template'.DIRECTORY_SEPARATOR);
    define('LIBRARY_PATH', 'system/libraries'.DIRECTORY_SEPARATOR);
    define('CONTROLLER_PATH', 'system/controllers'.DIRECTORY_SEPARATOR);
    define('MODEL_PATH', 'system/models'.DIRECTORY_SEPARATOR);
    define('SERVICE_PATH', 'system/services'.DIRECTORY_SEPARATOR);


/*
* ----------------------------------------------------------
* LOAD COMPONENT
* ----------------------------------------------------------
*/
    include LIBRARY_PATH.'Template.php';
    include LIBRARY_PATH.'Database.php';
    include LIBRARY_PATH.'Config.php';


/*
 * ----------------------------------------------------------
 * LOAD BOOTSTRAP
 * ----------------------------------------------------------
 *
 * And away we go...
 */
    require_once 'bootstrap.php';