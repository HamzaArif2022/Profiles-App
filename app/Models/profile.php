<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model  /* la table de la base donnes */
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio'
    ];
    //   public   $table= 'profiles';
}
//pour specifie le column de selection from database
function getRouteKeyName(){

    return "id";
}
