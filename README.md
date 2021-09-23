<p align="center"><a href="#" target="_blank"><img src="https://i.ibb.co/3v7HN7g/courier-api.png" width="400"></a></p>

## Courier API

Courier API adalah project API untuk mengetahui ongkos kirim Logistik-logistik pengiriman barang antar kota (dalam negeri) & International (dari Indonesia ke luar negeri).

Courier API dibuat menggunakan **[Laravel php framework](https://laravel.com)**, dan library **[rdj/rajaongkir](https://packagist.org/packages/rdj/rajaongkir)**



## Installation

1. Download atau Clone project ini:

```bash
$ git clone https://github.com/ranggadarmajati/courier_api.git
```
2. Masuk folder courier_api
```bash
$ cd courier_api
```
3. Install package:
```bash
$ composer update
```
4. Copy .env.example ke .env
```bash
$ cp .env.example .env
```
5. Update .env
```php
RAJAONGKIR_APIKEY=your_api_key_raja_ongkir
RAJAONGKIR_TYPE=your_type_account(e.g:starter or basic or pro)
```
6. Cek routing:
```bash
$ php artisan route:list
+--------+----------+------------------------------+---------------------------+---------------------------------------------------------------+------------+
| Domain | Method   | URI                          | Name                      | Action                                                        | Middleware |
+--------+----------+------------------------------+---------------------------+---------------------------------------------------------------+------------+
|        | GET|HEAD | /                            |                           | Closure                                                       | web        |
|        | GET|HEAD | api/city                     | city.                     | App\Http\Controllers\CityController@index                     | api        |
|        | GET|HEAD | api/city/{id}                | city.                     | App\Http\Controllers\CityController@show                      | api        |
|        | GET|HEAD | api/cost                     | cost.                     | App\Http\Controllers\CostController@index                     | api        |
|        | GET|HEAD | api/cost/currency            | cost.                     | App\Http\Controllers\CostController@currency                  | api        |
|        | GET|HEAD | api/cost/international       | cost.                     | App\Http\Controllers\CostController@internationalCost         | api        |
|        | GET|HEAD | api/internationaldestination | internationaldestination. | App\Http\Controllers\InternationalDestinationController@index | api        |
|        | GET|HEAD | api/internationalorigin      | internationalorigin.      | App\Http\Controllers\InternationalOriginController@index      | api        |
|        | GET|HEAD | api/province                 | province.                 | App\Http\Controllers\ProvinceController@index                 | api        |
|        | GET|HEAD | api/province/{id}            | province.                 | App\Http\Controllers\ProvinceController@show                  | api        |
|        | GET|HEAD | api/subdistrict              | subdistrict.              | App\Http\Controllers\SubdistrictController@index              | api        |
|        | GET|HEAD | api/subdistrict/{id}         | subdistrict.              | App\Http\Controllers\SubdistrictController@show               | api        |
|        | GET|HEAD | sanctum/csrf-cookie          |                           | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show    | web        |
+--------+----------+------------------------------+---------------------------+---------------------------------------------------------------+------------+

```
7. Running Project

```bash
$ php artisan serve
```

## License
[MIT](https://github.com/ranggadarmajati/courier_api/blob/main/LICENSE)