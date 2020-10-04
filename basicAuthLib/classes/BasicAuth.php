<?php

namespace BasicAuthClasses;
class BasicAuth
{

    public function basicAuth(string $username, string $password){
        $result =  $username .'-'.$password;
        return $result;
    }
}