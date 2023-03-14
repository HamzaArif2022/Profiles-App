<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile extends Model /* la table de la base donnes */
{
    use SoftDeletes; // utillise un trait qui permet de sauvgarder la line supprimer a la table
    use HasFactory;
    // pour specifie tout les champs qui vous allez Modifier
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'image'
    ];
    // pour convert la date from dbs 
    // protected $dates=['created_at'];// pour affiche $request->created_at->format("d-m-y)
    //   public   $table= 'profiles';
    
    public function getImageAttribute($value)
    {
        return $value??"profile/default.jpg";// ?? =or si la valeur de l'image existe ok / si Non prendre default.jpg comme valeur
    }
    function getRouteKeyName()
    {
        return "id"; // Model binding: tout les parameter qui vous passer par url de type profiles table
    }
}
//pour specifie le column de selection from database

// pour ajouter un image pardefault 
