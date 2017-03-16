<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello World dari $pengguna";
// });

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');

//memanggil langsung dari routes tugas karena tidak selesai
Route::get('pengguna/arif', function(){
    	$pengguna = new App\Pengguna();
    	$pengguna->username = 'Arif';
    	$pengguna->password = 'f';
    	$pengguna-> save();
    	return "data dengan username {$pengguna->username} telah disimpan";
});


//Meregisterkan controller ke route tugas posttest
Route::get('Dosen', 'DosenController@awal');
Route::get('Dosen/tambah', 'DosenController@tambah');

Route::get('Mahasiswa', 'MahasiswaController@awal');
Route::get('Mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('Matakuliah', 'MatakuliahController@awal');
Route::get('Matakuliah/tambah', 'MatakuliahController@tambah');

Route::get('Dosen_Matakuliah', 'Dosen_MatakuliahController@awal');
Route::get('Dosen_Matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

Route::get('Jadwal_Matakuliah', 'Jadwal_MatakuliahController@awal');
Route::get('Jadwal_Matakuliah/tambah', 'Jadwal_MatakuliahController@tambah');

Route::get('Ruangan', 'RuanganController@awal');
Route::get('Ruangan/tambah', 'RuanganController@tambah');