<?php

namespace App\Entities;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\SoftDeletes;

/*use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;*/

/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
/*
class User extends Model implements Transformable
{
    use TransformableTrait;

    
     * The attributes that are mass assignable.
     *
     * @var array
     
    //protected $fillable = [];

}
*/

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * ============================================================================================================= *
     * The ORM database attributes
     * ============================================================================================================= *
     */

    public    $timestamps   = true;
    protected $table        = 'users';
    protected $fillable     = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission'];
    protected $hidden       = ['password', 'remember_token'];

    public function setPasswordAttributte($value)
    {
        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
    }
}
