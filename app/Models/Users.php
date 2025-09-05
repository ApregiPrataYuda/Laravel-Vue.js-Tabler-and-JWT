<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject; // ✅ import

class Users extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // isi fillable atau guarded sesuai kebutuhan
    protected $fillable = [
        'fullname',
        'username',
        'phone_number',
        'email',
        'password',
        'role',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     */
    public function getJWTIdentifier()
    {
        return $this->getKey(); // biasanya id
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
