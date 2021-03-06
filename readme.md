# FattureInCloud

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

Laravel Fatture In Cloud Service.
Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require insologystudio/fatture-in-cloud
```

## Usage
Please reference to  [fattureincloud.it](https://api.fattureincloud.it/v1/documentation/dist/) api docs.

```php
<?php
namespace App\Http\Controllers;
use FattureInCloud;

class ClientController extends Controller
{


    public function index()
    {
        $clientService =  FattureInCloud::client();
        $list = $clientService->list();
        $create = $clientService->create(['nome' => 'Joe']);
    }
}

```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Insology Studio][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/insologystudio/fatture-in-cloud.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/insologystudio/fatture-in-cloud.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/insologystudio/fatture-in-cloud/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/insologystudio/fatture-in-cloud
[link-downloads]: https://packagist.org/packages/insologystudio/fatture-in-cloud
[link-travis]: https://travis-ci.org/insologystudio/fatture-in-cloud
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/insologystudio
[link-contributors]: ../../contributors
