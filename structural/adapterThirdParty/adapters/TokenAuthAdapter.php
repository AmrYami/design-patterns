<?php


namespace AdapterThirdPartyadapters;


use AdapterThirdPartyInterfaces\AuthInterface;
use TokenAuthClasses\TokenAuth;

class TokenAuthAdapter implements AuthInterface
{

    /**
     * @var TokenAuth
     */
    private $tokenAuth;

    public function __construct(TokenAuth $tokenAuth){

        $this->tokenAuth = $tokenAuth;
    }

    public function login(array $params)
    {
        return $this->tokenAuth->tokenAuth($params['key'],$params['token']);
    }
}