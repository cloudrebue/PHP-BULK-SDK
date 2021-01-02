<?php


namespace CloudRebue\Api\Handlers\AccountHandlers;


use CloudRebue\Api\Handlers\RebueHandler;

class AccountTopUpImpl extends RebueHandler
{
    public function process()
    {
        $method = $this->getMethod();
        return $this->$method();
    }
}
