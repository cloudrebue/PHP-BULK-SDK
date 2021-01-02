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
    |sendSMS() takes in an SMS() Object.
    |
    */

$account_id = "0278933ad3f9fe59c13245cf4a4cfdcf"; // Account Id from Bulk Portal
$api_key = "01a767c85d8673c80c4dfb264399dea795d712227ee1eb780c61c736981bdddf80b24ce5a14acf8eabc69378e41dafebbd1596cc97beef79d9807aa839221a02"; // Api Key from Bulk Portal

$version = "v1"; //DONT change unless you are using a different version
$instance = new CloudRebue($account_id, $api_key, $version);

//create multiple Sms Object(s)
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
$sms1= new Sms("CLOUD_REBUE", "4554", "Test Message 1", "101");
$sms2 = new Sms("COACHIFY", "335455", "Test Message 2", "102");
$sms3 = new Sms("BizTxt", "3546", "Test Message 3", "102");

//send Sms object
$response = $instance->sendBatchSMS($sms1, $sms2, $sms3);

//invoke multiple
//call_user_func_array https://www.php.net/manual/en/function.call-user-func-array.php
header('Content-Type: application/json');
print_r(json_encode($response));
// print_r($response);
