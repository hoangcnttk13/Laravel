<?php

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

Route::get('/translate', function () {
    return view('translate');
});

Route::post('/translate', function (Illuminate\Http\Request $request)
{
	$englishword = array("Hello"=>"Xin Chào", "You"=>"Bạn");
	$english = $request->english;
	foreach ($englishword as $key => $value)
	{
		if ($key==$english)
		{
			return view ('display_translate', compact(['english','key','value']));
		}
	}
	
});
