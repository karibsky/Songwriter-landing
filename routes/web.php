<?php


Route::get('/', function () {
		$songs = App\Song::all();
    return view('welcome',compact('songs'));
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/update/{id}', function ($id) {
    $songs = App\Song::where('id', $id)->get();
    return view('update',compact('songs'));
});

Route::post('home/update/new/{id}', function (\Illuminate\Http\Request $request) {
    $song = App\Song::find($request->id);
    $song->update([
        'name' => $request['name'],
        'song_path' => $request['spath'],
        'image_path' => $request['ipath'],
    ]);
    return redirect('home');
});

Route::get('home/delete/{id}', function ($id) {
    \App\Song::destroy($id);
    return redirect()->back();
});
