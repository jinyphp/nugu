<?php

namespace Jiny\Nugu;

class Proxy
{

    public function __construct()
    {
        echo __CLASS__;
    }

    const API_PATH = "\API\Nugu\\";
    public function actionName($action)
    {
        $action = str_replace("_", ".", $action);
        $names = explode(".",$action);
        $controllerName = self::API_PATH;
        foreach ($names as $name) {
            $controllerName .= ucfirst($name);
        }
        
        return $controllerName;
    }

    /**
     * 
     */

}