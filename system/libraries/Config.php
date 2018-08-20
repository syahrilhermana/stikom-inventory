<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:21
 */

class Config
{
    public function app()
    {
        return "Inventory System";
    }

    public function base_url()
    {
        $host = FALSE;    // or $host = ''; etc. depending on how you'll use it later.
        if (isset($_SERVER['HTTP_HOST'])) {
            $host = "http://".$_SERVER['HTTP_HOST'];
            $host .= preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';
        }
        return $host;
    }
}