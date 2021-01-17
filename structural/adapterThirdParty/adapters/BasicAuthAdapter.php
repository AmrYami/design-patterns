<?php


namespace AdapterThirdPartyadapters;


use AdapterThirdPartyInterfaces\AuthInterface;
use BasicAuthClasses\BasicAuth;

class BasicAuthAdapter implements AuthInterface
{

    /**
     * @var BasicAuth
     */
    private $basicAuth;

    public function __construct(BasicAuth $basicAuth){
        $this->basicAuth = $basicAuth;
    }

    public function login(array $params)
    {
        $this->basicAuth->basicAuth($params['username'],$params['password']);
    }
}