<?php


namespace CloudRebue\Api\Handlers\AccountHandlers;

use CloudRebue\Api\Handlers\RebueHandler;

class AccountBalanceImpl extends RebueHandler
{
    /**
     * @return mixed
     */
    public function getMethod()
    {
        return self::METHOD_GET;
    }

    public function process()
    {
        $method = $this->getMethod();
        return $this->$method();
    }
}
