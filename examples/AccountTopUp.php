<?php
require_once '../vendor/autoload.php';

use CloudRebue\Api\CloudRebue;
use CloudRebue\Api\Models\Sms;

/*
    |--------------------------------------------------------------------------
    | Initiate a New CloudRebue Instance
    |--------------------------------------------------------------------------
    |
    | REMEMBER to import the namespaces above to ensure code runs OK
    | or
    | Append the full namespaced path the the relevant class ....i.e CloudRebue\Api\CloudRebue
    |
    |TOKENS can be generated from your account, under the integrations tab.
    |CloudRebue() takes in two parameters, a MANDATORY token and optional api version
    |
    */

$token = "Token_string"; //replace with your Token from the portal
$version = "v1"; //DONT change unless you are using a different version
$instance = new CloudRebue($token, $version);


//Perform account Top Up
/*
 * Account TopUp parameters are:
 * amount(required)
 * account_id(required)
 * topup_reference(optional)
 *
 * Consult API Document for detailed explanation
 */
$response = $instance->accountTopUp("100", 10);

var_dump($response);
