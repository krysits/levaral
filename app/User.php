}
    ];
        'email_verified_at' => 'datetime',
    protected $casts = [
     */
     * @var array
     *
     * The attributes that should be cast to native types.
    /**

    ];
        'password', 'remember_token',
    protected $hidden = [
     */
     * @var array
     *
     * The attributes that should be hidden for arrays.
    /**

    ];
        'name', 'email', 'password',
    protected $fillable = [
     */
     * @var array
     *
     * The attributes that are mass assignable.
    /**

    use Notifiable;
{
class User extends Authenticatable

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

namespace App;

<?php
