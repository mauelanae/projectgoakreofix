<?php

use App\Http\Controllers\AdvanceafpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\JoinadminController;
use App\Http\Controllers\JoindataController;
use App\Http\Controllers\KonfirmasiadminController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\SearchadminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UpdateafpController;
use App\Http\Controllers\UpdatecampakController;
use App\Http\Controllers\UpdatedifteriController;
use App\Http\Controllers\UpdateracunController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {

    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('/',[LoginController::class,'authenticate']);

});

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
    //Middleware Admin
    Route::get('/dashboardadmin',[DashboardController::class,'admin'])->name('admin')->middleware('userAkses:admin');
    Route::get('/createkonfirmasiafp',[KonfirmasiController::class,'createkonfirmasiafp'])->name('createkonfirmasiafp')->middleware('userAkses:admin');
    Route::post('/konfirmasi/storekonfirmasiafp',[KonfirmasiController::class,'storekonfirmasiafp'])->name('storekonfirmasiafp')->middleware('userAkses:admin');
    Route::get('/createkonfirmasicampak',[KonfirmasiController::class,'createkonfirmasicampak'])->name('createkonfirmasicampak')->middleware('userAkses:admin');
    Route::post('/konfirmasi/storekonfirmasicampak',[KonfirmasiController::class,'storekonfirmasicampak'])->name('storekonfirmasicampak')->middleware('userAkses:admin');
    Route::get('/createkonfirmasidifteri',[KonfirmasiController::class,'createkonfirmasidifteri'])->name('createkonfirmasidifteri')->middleware('userAkses:admin');
    Route::post('/konfirmasi/storekonfirmasidifteri',[KonfirmasiController::class,'storekonfirmasidifteri'])->name('storekonfirmasidifteri')->middleware('userAkses:admin');
    Route::get('/createkonfirmasiracun',[KonfirmasiController::class,'createkonfirmasiracun'])->name('createkonfirmasiracun')->middleware('userAkses:admin');
    Route::post('/konfirmasi/storekonfirmasiracun',[KonfirmasiController::class,'storekonfirmasiracun'])->name('storekonfirmasiracun')->middleware('userAkses:admin');
    //Route Table Admin
    Route::get('/tableafp',[PenyakitController::class,'suspekafp'])->name('tablesuspekafp')->middleware('userAkses:admin');
    Route::get('/tablecampak',[PenyakitController::class,'suspekcampak'])->name('tablesuspekcampak')->middleware('userAkses:admin');
    Route::get('/tabledifteri',[PenyakitController::class,'suspekdifteri'])->name('tablesuspekdifteri')->middleware('userAkses:admin');
    Route::get('/tableracun',[PenyakitController::class,'suspekracun'])->name('tablesuspekracun')->middleware('userAkses:admin');
    //Route Table Status
    Route::get('/tablekonfirmasiafpadmin',[JoinadminController::class,'joinadminafp'])->name('joinadminafp')->middleware('userAkses:admin');
    Route::get('/tablekonfirmasicampakadmin',[JoinadminController::class,'joinadmincampak'])->name('joinadmincampak')->middleware('userAkses:admin');
    Route::get('/tablekonfirmasidifteriadmin',[JoinadminController::class,'joinadmindifteri'])->name('joinadmindifteri')->middleware('userAkses:admin');
    Route::get('/tablekonfirmasiracunadmin',[JoinadminController::class,'joinadminracun'])->name('joinadminracun')->middleware('userAkses:admin');
    //Route Search Admin
    Route::get('/searchafpadmin',[SearchadminController::class,'searchafpadmin'])->name('searchafpadmin')->middleware('userAkses:admin');
    Route::get('/searchcampakadmin',[SearchadminController::class,'searchcampakadmin'])->name('searchcampakadmin')->middleware('userAkses:admin');
    Route::get('/searchdifteriadmin',[SearchadminController::class,'searchdifteriadmin'])->name('searchdifteriadmin')->middleware('userAkses:admin');
    Route::get('/searchracunadmin',[SearchadminController::class,'searchracunadmin'])->name('searchracunadmin')->middleware('userAkses:admin');
    //Route Update Admin
    Route::get('/konfirmasiadmin/createkonfirmafpadmin', [KonfirmasiadminController::class,'create'])->name('createafpadmin')->middleware('userAkses:admin');
    Route::post('/konfirmasiadmin/storeafp', [KonfirmasiadminController::class,'store'])->name('storeafpadmin')->middleware('userAkses:admin');
    Route::get('/konfirmasiadmin/{id}/editafp', [UpdateafpController::class,'editafp'])->name('editafp')->middleware('userAkses:admin');
    Route::put('/konfirmasiadmin/{id}/updateafp', [UpdateafpController::class,'updateafp'])->name('updateafp')->middleware('userAkses:admin');
    //campak
    Route::get('/konfirmasiadmin/createkonfirmcampakadmin',[KonfirmasiadminController::class,'createkoncampak'])->name('createcampakadmin')->middleware('userAkses:admin');
    Route::post('/konfirmasiadmin/storecampak', [KonfirmasiadminController::class,'storekoncampak'])->name('storecampakadmin')->middleware('userAkses:admin');
    Route::get('/konfirmasiadmin/{id}/editcampak', [UpdatecampakController::class,'editcampak'])->name('editcampak')->middleware('userAkses:admin');
    Route::put('/konfirmasiadmin/{id}/updatecampak', [UpdatecampakController::class,'updatecampak'])->name('updatecampak')->middleware('userAkses:admin');
    //difteri
    Route::get('/konfirmasiadmin/createkonfirmdifteriadmin',[KonfirmasiadminController::class,'createkondifteri'])->name('cretaedifteriadmin')->middleware('userAkses:admin');
    Route::post('/konfirmasiadmin/storedifteri', [KonfirmasiadminController::class,'storedifteri'])->name('storedifteriadmin')->middleware('userAkses:admin');
    Route::get('/konfirmasiadmin/{id}/editdifteri', [UpdatedifteriController::class,'editdifteri'])->name('editdifteri')->middleware('userAkses:admin');
    Route::put('/konfirmasiadmin/{id}/updatedifteri', [UpdatedifteriController::class,'updatedifteri'])->name('updatedifteri')->middleware('userAkses:admin');
    //racun
    Route::get('/konfirmasiadmin/createkonfirmracunadmin',[KonfirmasiadminController::class,'createracun'])->name('createracunadmin')->middleware('userAkses:admin');
    Route::post('/konfirmasiadmin/storeracun', [KonfirmasiadminController::class,'storeracun'])->name('storeracunadmin')->middleware('userAkses:admin');
    Route::get('/konfirmasiadmin/{id}/editracun', [UpdateracunController::class,'editracun'])->name('editracun')->middleware('userAkses:admin');
    Route::put('/konfirmasiadmin/{id}/updateracun', [UpdateracunController::class,'updateracun'])->name('updateracun')->middleware('userAkses:admin');
    //export excel
    Route::get('/exportsuspekafp',[ExportController::class,'suspekafp'])->name('exportsuspekafp')->middleware('userAkses:admin');
    Route::get('/exportsuspekcampak',[ExportController::class,'suspekcampak'])->name('exportsuspekcampak')->middleware('userAkses:admin');
    Route::get('/exportsuspekdifteri',[ExportController::class,'suspekdifteri'])->name('exportsuspekdifteri')->middleware('userAkses:admin');
    Route::get('/exportsuspekracun',[ExportController::class,'suspekracun'])->name('exportsuspekracun')->middleware('userAkses:admin');

    Route::get('/upload',[UploadController::class,'uploaddokumen'])->name('uploaddokumen')->middleware('userAkses:admin');
    Route::get('/tableupload',[UploadController::class,'table'])->name('tableupload')->middleware('userAkses:user');
    Route::get('/download/{id}',[UploadController::class,'download'])->name('download')->middleware('userAkses:user');
    Route::post('upload/store',[UploadController::class,'upload'])->name('upload')->middleware('userAkses:admin');
    Route::DELETE('/delete/{id}',[UploadController::class,'delete'])->name('deletedata')->middleware('userAkses:user');
    

    //Middleware User
    Route::get('/dashboarduser',[DashboardController::class,'user'])->name('user')->middleware('userAkses:user');
    Route::get('/services',[DashboardController::class,'services'])->name('services')->middleware('userAkses:user');
    //Middleware user (create data)
    Route::get('/createsuspekafp',[PenyakitController::class,'createafp'])->name('createafp')->middleware('userAkses:user');
    Route::get('/createsuspekcampak',[PenyakitController::class,'createcampak'])->name('createcampak')->middleware('userAkses:user');
    Route::get('/createsuspekdifteri',[PenyakitController::class,'createdifteri'])->name('createdifteri')->middleware('userAkses:user');
    Route::get('/createsuspekracun',[PenyakitController::class,'createracun'])->name('createracun')->middleware('userAkses:user');
    Route::post('/penyakit/storeafp',[PenyakitController::class,'storeafp'])->name('storeafp')->middleware('userAkses:user');
    Route::post('/penyakit/storecampak',[PenyakitController::class,'storecampak'])->name('storecampak')->middleware('userAkses:user');
    Route::post('/penyakit/storedifteri',[PenyakitController::class,'storedifteri'])->name('storedifteri')->middleware('userAkses:user');
    Route::post('/penyakit/storeracun',[PenyakitController::class,'storeracun'])->name('storeracun')->middleware('userAkses:user');
    //Route Table User
    Route::get('/tablekonfirmasiafp',[JoindataController::class,'joinafp'])->name('joinafp')->middleware('userAkses:user');
    Route::get('/tablekonfirmasicampak',[JoindataController::class,'joincampak'])->name('joincampak')->middleware('userAkses:user');
    Route::get('/tablekonfirmasidifteri',[JoindataController::class,'joindifteri'])->name('joindifteri')->middleware('userAkses:user');
    Route::get('/tablekonfirmasiracun',[JoindataController::class,'joinracun'])->name('joinracun')->middleware('userAkses:user');
    //Route Search
    Route::get('/searchafp',[SearchController::class,'searchafp'])->name('searchafp')->middleware('userAkses:user');
    Route::get('/searchcampak',[SearchController::class,'searchcampak'])->name('searchcampak')->middleware('userAkses:user');
    Route::get('/searchdifteri',[SearchController::class,'searchdifteri'])->name('searchdifteri')->middleware('userAkses:user');
    Route::get('/searchracun',[SearchController::class,'searchracun'])->name('searchracun')->middleware('userAkses:user');
    //Route Advance Suspek AFP
    Route::get('/advanced/createdata',[AdvanceafpController::class,'createdata'])->name('advanceafp')->middleware('userAkses:user');
    Route::post('/advanced/storedata',[AdvanceafpController::class,'storedata'])->name('storedataadvance')->middleware('userAkses:user');
    Route::get('/tableupload',[UploadController::class,'table'])->name('tableupload')->middleware('userAkses:user');
    

});

