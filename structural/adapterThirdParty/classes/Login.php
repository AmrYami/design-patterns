<?php


namespace AdapterThirdPartyClasses;


use AdapterThirdPartyInterfaces\AuthInterface;

class Login
{

    /**
     * @var AuthInterface
     */
    private $auth;

    public function __construct(AuthInterface $auth){

        $this->auth = $auth;
    }

    public function login(array $params){
            return $this->auth->login($params);
    }

}