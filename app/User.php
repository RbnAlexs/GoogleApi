<?php 

namespace App;

use Illuminate\Auth\Authenticatable;
//use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'password'
    ];
    protected $hidden = [ 'password' ];
   
}
