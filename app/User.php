<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'avatar', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'username'    => "required|unique:users,username,$id",
            'password' => 'nullable|confirmed',
            'avatar' => 'image',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'username'    => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

}
