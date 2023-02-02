<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'category_id'
    ];


    /**
     * renvoie le formatage de la date
     * 
     * @return string
     */
    public function dateFormat() : string
    {
        return date_format($this->updated_at,'d-m-y');
    }



    /**
     * récupère la base de données du Model Category dans l'objet post et la lier
     * @return array
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //$post->category() donne accès à Category
    //$post->category()->label fournit le label de la catégorie via le post



}
