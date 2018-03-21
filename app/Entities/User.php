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
    protected $fillable     = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permision'];
    protected $hidden       = ['password', 'remember_token'];

    public function setPasswordAttributte($value)
    {
        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
    }

    public function getCpfAttribute()
    {
        $cpf = $this->attributes['cpf'];
        return substr($cpf, 0, 3) . '.' . substr($cpf, 4, 3). '.' . substr($cpf, 7, 3) . '-' . substr($cpf, -2);
    }

    public function getPhoneAttribute()
    {
        $phone = $this->attributes['phone'];
        return "(" . substr($phone, 0, 2) . ') ' . substr($phone, 2, 4) . '-' . substr($phone, -4);
    }

    public function getBirthAttribute()
    {
        $birth = explode('-', $this->attributes['birth']);

        if(count($birth) != 3)
            return "";

        $birth = $birth[2] .'/' . $birth[1] .'/'. $birth[0];
        return $birth;
    }
}
