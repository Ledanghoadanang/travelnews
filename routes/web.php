<?php

use App\Category;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/category', function () {
    return view('frontend.category');
});
Route::get('/single', function () {
    return view('frontend.single');
});
Route::get('/article/create', function () {
  $categories = Category::all()->pluck('name','id');
    return view('frontend.article.create',compact('categories'));
});
