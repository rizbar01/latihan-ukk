<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
/*Route::get('/tambahdata', function () {
    return view('tambahdata');
});
*/
// Route untuk menentukan bagaimana aplikasi merespons permintaan pengguna pada URL tertentu
// get berarti tindakan yang dilakukan adalah mengambil
//'siswa' berarti utl yang dituju
//controller itu bertanggung jawab ata yang menangani data
//index berarti fungsinya menampilkan data
//name itu nama fungsi yang dijalankan ini
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('tambahdata', [SiswaController::class, 'add'])->name('tambahdata');
Route::post('tambahdata', [SiswaController::class,'store'])->name('tambahdata.process');
Route::delete('siswa/{id}', [SiswaController::class,'destroy'])->name('siswa.delete');
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{id}/edit', [SiswaController::class, 'update'])->name('siswa.update');

