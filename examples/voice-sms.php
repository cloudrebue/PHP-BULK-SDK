<?php
require_once '../vendor/autoload.php';

use CloudRebue\Api\CloudRebue;
use CloudRebue\Api\Models\VoiceSms;

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
    |sendVoiceSMS() takes in an SMS() Object.
    |
    */

$token = "Token_string"; //replace with your Token from the portal

$version = "v1"; //DONT change unless you are using a different version
$instance = new CloudRebue($token, $version);

//create an Sms Object
/*
 * SMS Object parameters are:
 * originator(required)
 * phone(required)
 * message(required)
 * correlator(optional)
 * voice(optional: default = 1)
 * repeat(optional: default = 1)
 * endpoint(optional)
 *
 * Consult API Document for detailed explanation
 */

  // You can also add multiple phone contacts separated with a comma
$sms= new VoiceSms("+254710282777", "0708361797", "Test message, 1, 2, 3, 4, 5 . and 1 . 2 . 3 . 4.5 . 6", "voicesms","2","10", "https://example.com/delivery");

//send Sms object
$response = $instance->sendVoiceSMS($sms);

header('Content-Type:application/json','Accept: application/json');
print_r(json_encode($response));
