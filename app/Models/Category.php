<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
    ];


    /**
     * récupère la base de données du Model Category dans l'objet post et la lier
     * @return array
     */
    public function post(){
        return $this->hasMany(Post::class);
    }

}
