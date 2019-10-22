<?php

namespace Jiny\Nugu;

class Proxy
{
    protected $Request, $Response;
    private $bodyjson;

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }

        return self::$Instance;
    }
    

    public function __construct($req, $res)
    {
        // echo __CLASS__;
        $this->Request = $req;
        $this->Response = $res;

        $this->bodyjson = json_decode($this->Request->getBody());
    }

    public function setRequest($req)
    {
        $this->Request = $req;
        return $this;
    }

    public function setResponse($res)
    {
        $this->Response = $res;
        return $this;
    }

    const API_PATH = "\API\Nugu\\";
    private $controller;
    public function endPoint($service=null)
    {
        $actionName = $this->actionName();
        $action = str_replace("_", ".", $actionName);
        $names = explode(".",$action);

        $this->controller = self::API_PATH;
        foreach ($names as $name) {
            $this->controller .= ucfirst($name);
        }
        return $this->controller;
    }

    public function actionName()
    {
        return $this->bodyjson->action->actionName;
    }

    public function params($key)
    {
        if($key) {
            return $this->bodyjson->action->parameters->$key->value;
        } 
        return $this->bodyjson->action->parameters;
    }


    /**
     *
     */

}
