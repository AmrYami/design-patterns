<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \AdapterThirdPartyadapters\BasicAuthAdapter;
use \AdapterThirdPartyClasses\Login;
use \AdapterThirdPartyadapters\TokenAuthAdapter;
use \BasicAuthClasses\BasicAuth;
use \TokenAuthClasses\TokenAuth;
function info()
{
    try {
        $basicClass = new BasicAuth();
        $basicAuth = new BasicAuthAdapter($basicClass);
        $login1 = new Login($basicAuth);
        $result1 = $login1->login(['username' => 'amr-yami', 'password' => 'amr-yami']);
        echo $result1;
        echo '<br>';

        $basicToken = new TokenAuth();
        $tokenAuth = new TokenAuthAdapter($basicToken);
        $login= new Login($tokenAuth);
        $result = $login->login(['key'=> 'token', 'token' => 'token']);
        echo $result;
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();