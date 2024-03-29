# Official CloudRebue PHP Api SDK

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This PHP SDK provides convenient methods for consuming CloudRebue API.

## Documentation

CloudRebue API Documentation can be found at https://developers.cloudrebue.co.ke


## Install

Via Composer (recommended)

``` bash
$ composer require cloudrebue/api
```

Via Download

``` bash
1. Clone or Download this Repo.
2. run `composer install` in the root of the project
```

## Usage

### Sending a Message

Detailed samples can be obtained from [examples folder](examples)

``` php
<?php
//include if your project wasent initialized with composer prior to downloading.
//ensure path to vendor is correct
require_once 'vendor/autoload.php';

use CloudRebue\Api\CloudRebue;
use CloudRebue\Api\Models\Sms;

$instance = new CloudRebue("TOKEN_string");

//create an Sms Object
$sms= new Sms("CLOUD_REBUE", "0708361797", "Test Message 1", "101");

//send Sms object
$response = $instance->sendSMS($sms);

var_dump($response);

```

### Sending Messages in batches

``` php
<?php
//include if your project wasent initialized with composer prior to downloading.
//ensure path to vendor is correct
require_once 'vendor/autoload.php';

use CloudRebue\Api\CloudRebue;
use CloudRebue\Api\Models\Sms;

$instance = new CloudRebue("TOKEN_string");

//create multiple Sms Object(s)
$sms1= new Sms("CLOUD_REBUE", "0708361797", "Test Message 1", "101");
$sms2 = new Sms("BizTxt", "0735343603"", "Test Message 2", "102");

//send Sms object
$response = $instance->sendBatchSMS($sms1, $sms2);

var_dump($response);

```

### Available Methods are:

1.  sendSMS()
2.  sendBatchSMS()
3.  sendVoiceSMS()
4.  sendBatchVoiceSMS()
5.  accountBalance()
6.  accountTopUp()


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email edwardmuss5@gmail.com instead of using the issue tracker.

## Credits

- [Edward Muss][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/CloudRebue/Api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/CloudRebue/Api.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cloudrebue/api
[link-downloads]: https://packagist.org/packages/cloudrebue/api
[link-author]: https://github.com/edwardmuss
[link-contributors]: ../../contributors
