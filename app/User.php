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
        'name', 'email', 'password',
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
    *   Relación a la tabla roles
    */
    public function roles(){
        
        return $this->belongsToMany('App\Role')->withTimestamps();

    }

    /*
    *   Validacion de utenticacion de roles
    */

        public function authorizeRoles($roles){
        
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }
    
    /*
    *   Validaciones de varios roles
    */

    public function hasAnyRole($roles){

        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } 

        else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }

    /*
    *   Validaciones de un rol
    */
    
    public function hasRole($role){
       
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
