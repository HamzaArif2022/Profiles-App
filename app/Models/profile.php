<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile extends Model  /* la table de la base donnes */
{   use SoftDeletes;// utillise un trait qui permet de sauvgarder la line supprimer a la table
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'image'
    ];
    //   public   $table= 'profiles';
}
//pour specifie le column de selection from database
function getRouteKeyName(){

    return "id";
}
