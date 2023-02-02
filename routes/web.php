<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//page d'accueil
Route::get('/',[MainController::class,'home'])->name('home');
/*
Route::get('/test2', function(){
    return view('test');
});
Route::get('/test', function () {               //affichage de la vue dans le dossier folder
    return view('folder.view');
});
*/

//route des views posts

Route::resource('posts',PostController::class);
//route des views users
Route::resource('users',UserController::class)->except(['edit','update','create','store','destroy']);

//exemple de formulaire
Route::get('/example-form',[MainController::class,'exampleForm']);


//Routes pour le middleware admin qui ne seront pas lues si il n'y a pas d'admin de connecté
Route::middleware(['admin'])->group(function(){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/posts',[App\Http\Controllers\PostController::class,'admin'])->name('posts.admin');
    Route::get('/admin/users',[App\Http\Controllers\UserController::class,'index'])->name('user.index');
    Route::resource('users',UserController::class);
    Route::resource('posts',PostController::class)->only(['create','edit','update','store','destroy']);
});
/*
Route::get('/test', function(){             //créer un lien de page
    return 'premier test Route->web';
});

//Route::redirect('/test', '/');              //redirection, avec entrée, et redirection

Route::post('/store',function(){                //spécifique aux retours de formulaire. si rien de précisé,
    return 'POST route';                        //message d'erreur
});

Route::any('/test2',function(){
    return 'test route any';
});

Route::get('/article/{id}/comments/{author?}', function($id,$author='zouzou'){  //{param?} permet de mettre un paramètre optionnel. si c'est le cas, on met un =
    return $author . " a écrit un commentaire sur l'article " . $id ;           //au paramètre pour lui donner une valeur par défaut. ici, on a 'zouzou' en valeur par défaut.
});


Route::prefix('admin')->group(function(){       //permet de regrouper sous le même "répertoire" niveau de l'url
    Route::get('users',function(){
        $user=Auth::user();
        return redirect('/admin/articles', 301);    //renvoi vers une page avec statut 301
    });
});

    Route::get('/articles', function(){
        return response('my article list');         
    });

    Route::get('categories',function(){
        return 'my categories';
    });

    Route::get('json',function(){   //réponse JSON
        return response()->json([    //renvoie une réponse JSON: {"name":"toto","age":25}
            'name' => 'toto',
            'age' => 25
        ]);
    });
});

*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
