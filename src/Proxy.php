<?php

namespace Jiny\Nugu;

class Proxy
{
    protected $Request, $Response;
    private $bodyjson;

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
    }

    public function setResponse($res)
    {
        $this->Response = $res;
    }

    const API_PATH = "\API\Nugu\\";
    private $controller;
    public function endPoint($service=null)
    {
        $actionName = $this->bodyjson->action->actionName;
        $action = str_replace("_", ".", $actionName);
        $names = explode(".",$action);
        
        $this->controller = self::API_PATH;
        foreach ($names as $name) {
            $this->controller .= ucfirst($name);
        }
        return $this->controller;
    }

    /**
     * 
     */

}