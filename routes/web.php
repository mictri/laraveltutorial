<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\AppServiceProvider;

Route::get('/', function () {
    return view('test');
});


Route::get('/test', function(){
    return ('Test Route Get');
});

Route::get('user-management', function(){
    return ('User page');
})->name('user');

Route::get('product', function(){
    return ('Product page');
});
Route::get('news', function(){
    return ('News page');
});
Route::get('service', function(){
    return ('Service page');
});



Route::get('news/{id}', function($id){
    return "Bai viet so {$id}";
})->name('user.show');





Route::get('news/{id}/branch/{branchID}', function($id,$branchID){
    return "Bai viet so {$id}. Chi nhanh: ${branchID}";
})->name('user.show.brand');


Route::group(['prefix' => 'backend'],function(){ //Route::prefix('backend')->group(function(){
    Route::get('user-management', function(){
        return 'user management';
    })->name('backend.user');

    Route::get('product-management', function(){
        return 'product management';
    })->name('backend.product');

    Route::get('category-management', function(){
        return 'category management';
    })->name('backend.category');

    Route::get('news-management', function(){
        return 'news management';
    })->name('backend.news');
});





