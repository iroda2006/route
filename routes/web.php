<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route :: get ('dashbord' , function (){
    return ('dashbord');
});*/


/*Route :: get ('register' , function (){
    return redirect( 'dashbord');
});*/

/*Route:: get ('posts/{posts}/comments/{commentId}' ,function ($posts , $commentId){
    return "posts:  " . $posts . "  comments: " . $commentId;
})->name ('user');*/

/*Route :: get ('posts' , function (){
    return redirect() ->route('user');
});*/

Route :: prefix("admin")->group(function(){
    Route::get("login" , function(){
        return'salom';
    });
    Route::get("register" , function(){
        return'salom';
    });
});
Route :: prefix("user")->group(function(){
    Route::get("login" , function(){
        return'salom';
    });
});