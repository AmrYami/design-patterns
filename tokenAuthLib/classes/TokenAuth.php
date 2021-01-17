<?php

namespace TokenAuthClasses;
class TokenAuth
{

    public function tokenAuth(string $key, string $token){
        return base64_encode($token .'-'.$key);
    }
}