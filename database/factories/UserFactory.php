});
    ];
        'remember_token' => Str::random(10),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'email_verified_at' => now(),
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
    return [
$factory->define(User::class, function (Faker $faker) {

*/
|
| model instances for testing / seeding your application's database.
| your application. Factories provide a convenient way to generate new
| This directory should contain each of the model factory definitions for
|
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
/*

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<?php
