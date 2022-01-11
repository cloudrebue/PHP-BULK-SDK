<?php


namespace CloudRebue\Api;


use CloudRebue\Api\Handlers\AccountHandlers\AccountHandler;
use CloudRebue\Api\Handlers\SmsHandlers\SMSHandler;
use CloudRebue\Api\Handlers\SmsHandlers\VoiceSMSHandler;

class CloudRebue
{
    use SMSHandler, AccountHandler, VoiceSMSHandler;


    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $version;


    /**
     * CloudRebue constructor.
     * @param string $token
     * @param string $version
     */
    public function __construct(string $token, string $version = 'v1')
    {
        $this->token = $token;
        $this->version = $version;
    }
}
