<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'dni', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }


    public function esAdmin(){
        if($this->role->nombre_rol=='Administrador'){
            return true;
        }
        return false;
    }

    public function esJefe(){
        if($this->role->nombre_rol=='Jefe de taller'){
            return true;
        }
        return false;
    }

    public function esMecanico(){
        if($this->role->nombre_rol=='Mecanico'){
            return true;
        }
        return false;
    }

    public function esRecepcionista(){
        if($this->role->nombre_rol=='Recepcionista'){
            return true;
        }
        return false;
    }

    
}
