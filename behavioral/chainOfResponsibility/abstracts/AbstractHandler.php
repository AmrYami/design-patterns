<?php

namespace chainAbstracts;

use chainInterfaces\HandlerInterface;
use chainRequests\Request;

class AbstractHandler implements HandlerInterface
{
    private $nextHandler = null;

    public function handle(Request $request)
    {
        if ($this->nextHandler)
            return $this->nextHandler->handle($request);
        return $request;

    }

    public function setNext(HandlerInterface $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }
}