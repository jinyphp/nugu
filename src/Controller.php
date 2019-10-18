<?php

namespace Jiny\Nugu;

class Controller
{
    protected $Request, $Response;

    public function __construct()
    {

    }

    public function setRequest($req)
    {
        $this->Request = $req;
    }

    public function setResponse($res)
    {
        $this->Response = $res;
    }

    protected $Proxy;
    public function setProxy($proxy)
    {
        $this->Proxy = $proxy;
    }

    /**
     *
     */
}
