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

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2Mzc5NjczNzIsImV4cCI6NDc5MzcyNzM3MiwiZGF0YSI6eyJlbWFpbCI6Im11c3VuZ3VlZHdhcmRAZ21haWwuY29tIiwidXNlcl9pZCI6IjEiLCJ1c2VySWQiOiIxIn19.W7y90AJSw0nhYCg80K1Q9h2usPUUykogrVntU4Hxxww"; // Live

// $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2Mzc3NTgyNzAsImV4cCI6NDc5MzUxODI3MCwiZGF0YSI6eyJlbWFpbCI6ImVkd2FyZHNAY2xvdWRyZWJ1ZS5jby5rZSIsInVzZXJfaWQiOiIxIiwidXNlcklkIjoiMSJ9fQ.vLAqQG4qqsYDrFRX7izRhjPr3EgwHdVGLqnEyORcIL4"; // local

$version = "v1"; //DONT change unless you are using a different version
$instance = new CloudRebue($token, $version);

//Check Account Balance
$response = $instance->accountBalance();

header('Content-Type:application/json','Accept: application/json');
print_r(json_encode($response));
