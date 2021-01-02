<?php


namespace CloudRebue\Api;


use CloudRebue\Api\Handlers\AccountHandlers\AccountHandler;
use CloudRebue\Api\Handlers\SmsHandlers\SMSHandler;

class CloudRebue
{
    use SMSHandler, AccountHandler;


    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $account_id;

    /**
     * @var string
     */
    private $api_key;

    /**
     * @var string
     */
    private $version;


    /**
     * CloudRebue constructor.
     * @param string $token
     * @param string $version
     */
    public function __construct(string $account_id, string $api_key, string $version = 'v1')
    {
        $this->token = base64_encode($account_id.':'.$api_key);
        $this->version = $version;
    }
}
