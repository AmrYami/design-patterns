<?php
namespace chainInterfaces;

use chainRequests\Request;

interface HandlerInterface
{

    public function setNext(HandlerInterface $handler);
    public function handle(Request $request);
}