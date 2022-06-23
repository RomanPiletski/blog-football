<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const NO_IMAGE = "uploads/no-avatar.png";

    protected $fillable = [
        'name',
        'email',
        "avatar",
        "password",
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

//    protected function password(): Attribute
//    {
//        return Attribute::make(
//            get: fn($value) => $value,
//
//            set: function ($value){
//                if($value !== null)
//                    return Hash::make($value);
//                else return $this->password;
//            },
//        );
//    }

    public function setPasswordAttribute($value)
    {
        if ($value != null) $this->attributes['password'] = bcrypt($value);
    }

    public function getPasswordAttribute($value)
    {
        return $value;
    }

    public function setAvatarAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->avatar !== null && Storage::exists($this->avatar)) {
                Storage::delete($this->avatar);
            }


            $this->attributes['avatar'] = $value->store("uploads");
        }
    }

    public function getAvatarAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }

    public static function getRated()
    {
        return self::orderBy("scores", "desc")->take(3)->get();
    }

}
