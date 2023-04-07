<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['name','status']; 

    public function cities(){
        return $this->hasMany(City::class,'country_id','id');
    }

    public function posts()
    {
        // return $this->hasManyThrough('App\Post', 'App\User');
        return $this->hasManyThrough(Post::class, User::class);

    }
}
