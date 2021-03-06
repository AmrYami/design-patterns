<?php

namespace chainClasses;

use chainAbstracts\AbstractHandler;
use chainRequests\Request;

class AliHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() % 2 === 0){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        $request->setDone(false);
        $request->setHandler('Not Done');
        return parent::handle($request); // TODO: Change the autogenerated stub
    }

}