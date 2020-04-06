## About Project

This Laravel project is a simple Todo Application designed to demonstrate REST API pattern. It includes CRUD functionality of a database table named `todos`.

## Features

- REST API design pattern `App\Http\Controllers\TodoController.php`
- Dynamic filtering feature of data by column name
 ```App\Filters\Filters.php```
- Extension of Laravel's:
 `Illuminate\Foundation\Http\FormRequest` to support input Validation see `App\Http\Requests\APIRequest.php`
- Integrate testing for REST API using PHPUnit see: `Tests\Unit\TodoTest.php`
- Includes a Factory for testing database application and faking data: `database/factories/TodoFactory.php`

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
