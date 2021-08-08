<?php

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    //Message::create(['text'=>'hi everybody!']);
    $messages = Message::all();

    return view('about', ['messages'=>$messages]);
});

Route::get('/hello', function () {
    $messages = Message::all();
    return inertia('Hello', ['messages'=>$messages]);
});

Route::get('/contact', function () {
    return inertia('Contact');
});

Route::post('/messages', function(Request $request){
    $validated = $request->validate([
        'text'=>'required|min:11|max:11'
    ]);
    Message::create($validated);
    return redirect('/hello');
});
