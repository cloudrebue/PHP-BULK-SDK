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
    |TOKENS can be generated from your account, under the Api Keys tab.
    |CloudRebue() takes in two parameters, a MANDATORY token and optional api version
    |sendSMS() takes in an SMS() Object.
    |
    */

$token = "Token_string"; //replace with your Token from the portal

$version = "v1"; //DONT change unless you are using a different version
$instance = new CloudRebue($token, $version);

//create an Sms Object
/*
 * SMS Object parameters are:
 * sender(required)
 * phone(required)
 * message(required)
 * correlator(optional)
 * link_id(optional)
 * endpoint(optional)
 *
 * Consult API Document for detailed explanation
 */
 
 // You can also add multiple phone contacts separated with a comma
$sms= new Sms("BizTxt", "0708361797,0735343603", "Test message", "101","link-id-here_or_leave_NULL","https://domain.com/delivery-url");

//send Sms object
$response = $instance->sendSMS($sms);

header('Content-Type:application/json','Accept: application/json');
print_r(json_encode($response));
//var_dump($response);
