<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
class UsersModel extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
     protected $fillable = [
        'fullname',
        'username',
        'phone_number',
        'email',
        'role',
        'password',
    ];

     //opsional
    public function scopeOnlyDeleted(Builder $query, bool $only = false): Builder
    {
        return $only ? $query->onlyTrashed() : $query;
    }



public function scopeSearch($query, $search)
{
    if ($search) {
        return $query->where(function ($q) use ($search) {
            $q->where('fullname', 'like', "%{$search}%");
        });
    }
    return $query;
}



// Scope untuk sorting dinamis
public function scopeSort($query, $sortBy, $sortDir)
{
    return $query->orderBy($sortBy ?? 'created_at', $sortDir ?? 'asc');
}

// public static function isDuplicate(array $data, $id = null): array
// {
//     $errors = [];
//     $fields = ['fullname', 'email', 'username'];

//     foreach ($fields as $field) {
//         $query = static::where($field, $data[$field]);
//         if ($id) {
//             $query->where('id', '!=', $id);
//         }

//         if ($query->exists()) {
//             $errors[$field] = [ucfirst($field) . ' sudah digunakan.'];
//         }
//     }

//     return $errors;
// }


// public static function isDuplicate(array $data, $id = null): array
// {
//     $errors = [];

//     // Cek fullname
//     $queryFullname = static::where('fullname', $data['fullname']);
//     if ($id) {
//         $queryFullname->where('id', '!=', $id);
//     }
//     if ($queryFullname->exists()) {
//         $errors['fullname'] = ['Fullname sudah digunakan.'];
//     }

//     // Cek email
//     $queryEmail = static::where('email', $data['email']);
//     if ($id) {
//         $queryEmail->where('id', '!=', $id);
//     }
//     if ($queryEmail->exists()) {
//         $errors['email'] = ['Email sudah digunakan.'];
//     }

//     // Cek username
//     $queryUsername = static::where('username', $data['username']);
//     if ($id) {
//         $queryUsername->where('id', '!=', $id);
//     }
//     if ($queryUsername->exists()) {
//         $errors['username'] = ['Username sudah digunakan.'];
//     }

//     return $errors;
// }

public static function isDuplicate(array $data, $id = null): array
{
    $errors = [];

    // Cek fullname
    if (isset($data['fullname'])) {
        $queryFullname = static::where('fullname', $data['fullname']);
        if ($id) {
            $queryFullname->where('id', '!=', $id);
        }
        if ($queryFullname->exists()) {
            $errors['fullname'] = ['Fullname sudah digunakan.'];
        }
    }

    // Cek email
    if (isset($data['email'])) {
        $queryEmail = static::where('email', $data['email']);
        if ($id) {
            $queryEmail->where('id', '!=', $id);
        }
        if ($queryEmail->exists()) {
            $errors['email'] = ['Email sudah digunakan.'];
        }
    }

    // Cek username
    if (isset($data['username'])) {
        $queryUsername = static::where('username', $data['username']);
        if ($id) {
            $queryUsername->where('id', '!=', $id);
        }
        if ($queryUsername->exists()) {
            $errors['username'] = ['Username sudah digunakan.'];
        }
    }

    return $errors;
}

}

