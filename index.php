<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 9:54
 */

/*
 * ----------------------------------------------------------
 * LOAD COMPONENT
 * ----------------------------------------------------------
 */
    include 'system/libraries/Template.php';
    include 'system/libraries/Database.php';
    include 'system/libraries/Config.php';

/*
 * ----------------------------------------------------------
 * DEFINE CONSTANT
 * ----------------------------------------------------------
 */
    define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
    define('VIEWPATH', 'WEB-INF/template'.DIRECTORY_SEPARATOR);
    define('LIBPATH', 'system/libraries'.DIRECTORY_SEPARATOR);

/*
 * ----------------------------------------------------------
 * LOAD BOOTSTRAP
 * ----------------------------------------------------------
 *
 * And away we go...
 */
    require_once 'bootstrap.php';