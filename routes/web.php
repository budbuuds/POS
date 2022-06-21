<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Super Admin
    Route::get('/superadmin', 'SuperController@index')->name('home');

    Route::get('/super/barangmasuk/masuk_lensa', 'SuperController@lensamasuk')->name('lensamasuk');
    Route::get('/super/barangmasuk/masuk_softlens', 'SuperController@softlensmasuk')->name('softlensmasuk');
    
    Route::get('/super/barangkeluar/keluar_lensa', 'SuperController@lensakeluar')->name('lensakeluar');
    Route::get('/super/barangkeluar/keluar_softlens', 'SuperController@softlenskeluar')->name('softlenskeluar');
    
    Route::get('/super/framebpjs', 'SuperController@framebpjs')->name('framebpjs');
    Route::get('/super/frameumum', 'SuperController@frameumum')->name('frameumum');

    Route::get('/super/gudang/gudang_lensa', 'SuperController@gudanglensa')->name('gudanglensa');
    Route::get('/super/gudang/gudang_softlens', 'SuperController@gudangsoftlens')->name('gudangsoftlens');

    Route::get('/super/laporan', 'SuperController@laporan')->name('laporan');
    Route::post('/super/laporan/create', 'SuperController@create_laporan');

    Route::get('/super/gudang/gudang_frame', 'SuperController@gudangframe')->name('gudangframe');
    Route::get('/super/barangkeluar/keluar_frame', 'SuperController@framekeluar')->name('framekeluar');
    
//  ADMIN
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/barangmasuk/masuk_lensa', 'HomeController@lensamasuk')->name('lensamasuk');
    Route::get('/barangmasuk/masuk_frame', 'HomeController@framemasuk')->name('framemasuk');
    Route::get('/barangmasuk/masuk_softlens', 'HomeController@softlensmasuk')->name('softlensmasuk');

    Route::get('/framebpjs', 'HomeController@framebpjs')->name('framebpjs');
    Route::get('/frameumum', 'HomeController@frameumum')->name('frameumum');

    Route::get('/barangkeluar/keluar_lensa', 'HomeController@lensakeluar')->name('lensakeluar');
    Route::get('/barangkeluar/keluar_frame', 'HomeController@framekeluar')->name('framekeluar');
    Route::get('/barangkeluar/keluar_softlens', 'HomeController@softlenskeluar')->name('softlenskeluar');

    Route::get('/gudang/gudang_lensa', 'HomeController@gudanglensa')->name('gudanglensa');
    Route::get('/gudang/gudang_frame', 'HomeController@gudangframe')->name('gudangframe');
    Route::get('/gudang/gudang_softlens', 'HomeController@gudangsoftlens')->name('gudangsoftlens');

    Route::get('/laporan', 'HomeController@laporan')->name('laporan');
    Route::post('/laporan/create', 'HomeController@create_laporan');

// Galeri
    Route::get('/galeri', 'HomeController@galeri')->name('galeri');
    Route::post('/galeri/create', 'HomeController@create_galeri');

// Lensa MCCR
    Route::get('/gudang/lensa/mccr', 'HomeController@gudanglensamccr')->name('gudanglensamccr');
    Route::get('/barangmasuk/lensa/mccr', 'HomeController@lensamasukmccr')->name('lensamasukmccr');
    Route::post('/barangmasuk/lensa/mccr/create', 'HomeController@create_mccr_masuk');
    Route::get('/barangkeluar/lensa/mccr', 'HomeController@lensakeluarmccr')->name('lensakeluarmccr');
    Route::post('/barangkeluar/lensa/mccr/create', 'HomeController@create_mccr_keluar');

    Route::get('/super/gudang/lensa/mccr', 'SuperController@gudanglensamccr')->name('gudanglensamccr');
    Route::get('/super/barangmasuk/lensa/mccr', 'SuperController@lensamasukmccr')->name('lensamasukmccr');
    Route::post('/super/barangmasuk/lensa/mccr/create', 'SuperController@create_mccr_masuk');
    Route::get('/super/barangkeluar/lensa/mccr', 'SuperController@lensakeluarmccr')->name('lensakeluarmccr');
    Route::post('/super/barangkeluar/lensa/mccr/create', 'SuperController@create_mccr_keluar');

// Frame Biasa
    Route::get('/gudang/framebiasa', 'HomeController@gudang_frame')->name('gudang_frame');
    Route::post('/gudang/frame/create', 'HomeController@create_frame_masuk');
    Route::get('/barangkeluar/framebiasa', 'HomeController@frame_keluar')->name('frame_keluar');
    Route::post('/barangkeluar/frame/create', 'HomeController@create_frame_keluar');

    Route::get('/super/gudang/framebiasa', 'SuperController@gudang_frame')->name('gudang_frame');
    Route::post('/super/gudang/frame/create', 'SuperController@create_frame_masuk');
    Route::get('/super/barangkeluar/framebiasa', 'SuperController@frame_keluar')->name('frame_keluar');
    Route::post('/super/barangkeluar/frame/create', 'SuperController@create_frame_keluar');

// Frame Original
    Route::get('/gudang/frameoriginal', 'HomeController@gudang_frameoriginal')->name('gudang_frameoriginal');
    Route::post('/gudang/frameoriginal/create', 'HomeController@create_frameoriginal_masuk');
    Route::get('/barangkeluar/frameoriginal', 'HomeController@frameoriginal_keluar')->name('frameoriginal_keluar');
    Route::post('/barangkeluar/frameoriginal/create', 'HomeController@create_frameoriginal_keluar');

    Route::get('/super/gudang/frameoriginal', 'SuperController@gudang_frameoriginal')->name('gudang_frameoriginal');
    Route::post('/super/gudang/frameoriginal/create', 'SuperController@create_frameoriginal_masuk');
    Route::get('/super/barangkeluar/frameoriginal', 'SuperController@frameoriginal_keluar')->name('frameoriginal_keluar');
    Route::post('/super/barangkeluar/frameoriginal/create', 'SuperController@create_frameoriginal_keluar');

// Lensa MCCR kaca
    Route::get('/gudang/lensa/mccr/kaca', 'HomeController@gudanglensamccrkaca')->name('gudanglensamccrkaca');
    Route::get('/barangmasuk/lensa/mccr/kaca', 'HomeController@lensamasukmccrkaca')->name('lensamasukmccrkaca');
    Route::post('/barangmasuk/lensa/mccr/kaca/create', 'HomeController@create_mccrkaca_masuk');
    Route::get('/barangkeluar/lensa/mccr/kaca', 'HomeController@lensakeluarmccrkaca')->name('lensakeluarmccrkaca');
    Route::post('/barangkeluar/lensa/mccr/kaca/create', 'HomeController@create_mccrkaca_keluar');

    Route::get('/super/gudang/lensa/mccr/kaca', 'SuperController@gudanglensamccrkaca')->name('gudanglensamccrkaca');
    Route::get('/super/barangmasuk/lensa/mccr/kaca', 'SuperController@lensamasukmccrkaca')->name('lensamasukmccrkaca');
    Route::post('/super/barangmasuk/lensa/mccr/kaca/create', 'SuperController@create_mccrkaca_masuk');
    Route::get('/super/barangkeluar/lensa/mccr/kaca', 'SuperController@lensakeluarmccrkaca')->name('lensakeluarmccrkaca');
    Route::post('/super/barangkeluar/lensa/mccr/kaca/create', 'SuperController@create_mccrkaca_keluar');

// Lensa block
    Route::get('/gudang/lensa/block', 'HomeController@gudanglensablock')->name('gudanglensablock');
    Route::get('/barangmasuk/lensa/block', 'HomeController@lensamasukblock')->name('lensamasukblock');
    Route::post('/barangmasuk/lensa/block/create', 'HomeController@create_block_masuk');
    Route::get('/barangkeluar/lensa/block', 'HomeController@lensakeluarblock')->name('lensakeluarblock');
    Route::post('/barangkeluar/lensa/block/create', 'HomeController@create_block_keluar');

    Route::get('/super/gudang/lensa/block', 'SuperController@gudanglensablock')->name('gudanglensablock');
    Route::get('/super/barangmasuk/lensa/block', 'SuperController@lensamasukblock')->name('lensamasukblock');
    Route::post('/super/barangmasuk/lensa/block/create', 'SuperController@create_block_masuk');
    Route::get('/super/barangkeluar/lensa/block', 'SuperController@lensakeluarblock')->name('lensakeluarblock');
    Route::post('/super/barangkeluar/lensa/block/create', 'SuperController@create_block_keluar');

// Lensa flexi
    Route::get('/gudang/lensa/flexi', 'HomeController@gudanglensaflexi')->name('gudanglensaflexi');
    Route::get('/barangmasuk/lensa/flexi', 'HomeController@lensamasukflexi')->name('lensamasukflexi');
    Route::post('/barangmasuk/lensa/flexi/create', 'HomeController@create_flexi_masuk');
    Route::get('/barangkeluar/lensa/flexi', 'HomeController@lensakeluarflexi')->name('l ensakeluarflexi');
    Route::post('/barangkeluar/lensa/flexi/create', 'HomeController@create_flexi_keluar');

    Route::get('/super/gudang/lensa/flexi', 'SuperController@gudanglensaflexi')->name('gudanglensaflexi');
    Route::get('/super/barangmasuk/lensa/flexi', 'SuperController@lensamasukflexi')->name('lensamasukflexi');
    Route::post('/super/barangmasuk/lensa/flexi/create', 'SuperController@create_flexi_masuk');
    Route::get('/super/barangkeluar/lensa/flexi', 'SuperController@lensakeluarflexi')->name('l ensakeluarflexi');
    Route::post('/super/barangkeluar/lensa/flexi/create', 'SuperController@create_flexi_keluar');

// Lensa grey
    Route::get('/gudang/lensa/grey', 'HomeController@gudanglensagrey')->name('gudanglensagrey');
    Route::get('/barangmasuk/lensa/grey', 'HomeController@lensamasukgrey')->name('lensamasukgrey');
    Route::post('/barangmasuk/lensa/grey/create', 'HomeController@create_grey_masuk');
    Route::get('/barangkeluar/lensa/grey', 'HomeController@lensakeluargrey')->name('lensakeluargrey');
    Route::post('/barangkeluar/lensa/grey/create', 'HomeController@create_grey_keluar');

    Route::get('/super/gudang/lensa/grey', 'SuperController@gudanglensagrey')->name('gudanglensagrey');
    Route::get('/super/barangmasuk/lensa/grey', 'SuperController@lensamasukgrey')->name('lensamasukgrey');
    Route::post('/super/barangmasuk/lensa/grey/create', 'SuperController@create_grey_masuk');
    Route::get('/super/barangkeluar/lensa/grey', 'SuperController@lensakeluargrey')->name('lensakeluargrey');
    Route::post('/super/barangkeluar/lensa/grey/create', 'SuperController@create_grey_keluar');

// Lensa kMCCR
    Route::get('/gudang/lensa/kmccr', 'HomeController@gudanglensakmccr')->name('gudanglensakmccr');
    Route::get('/barangmasuk/lensa/kmccr', 'HomeController@lensamasukkmccr')->name('lensamasukkmccr');
    Route::post('/barangmasuk/lensa/kmccr/create', 'HomeController@create_kmccr_masuk');
    Route::get('/barangkeluar/lensa/kmccr', 'HomeController@lensakeluarkmccr')->name('lensakeluarkmccr');
    Route::post('/barangkeluar/lensa/kmccr/create', 'HomeController@create_kmccr_keluar');

    Route::get('/super/gudang/lensa/kmccr', 'SuperController@gudanglensakmccr')->name('gudanglensakmccr');
    Route::get('/super/barangmasuk/lensa/kmccr', 'SuperController@lensamasukkmccr')->name('lensamasukkmccr');
    Route::post('/super/barangmasuk/lensa/kmccr/create', 'SuperController@create_kmccr_masuk');
    Route::get('/super/barangkeluar/lensa/kmccr', 'SuperController@lensakeluarkmccr')->name('lensakeluarkmccr');
    Route::post('/super/barangkeluar/lensa/kmccr/create', 'SuperController@create_kmccr_keluar');

// Lensa kMCCR kaca
    Route::get('/gudang/lensa/kmccr/kaca', 'HomeController@gudanglensakmccrkaca')->name('gudanglensakmccrkaca');
    Route::get('/barangmasuk/lensa/kmccr/kaca', 'HomeController@lensamasukkmccrkaca')->name('lensamasukkmccrkaca');
    Route::post('/barangmasuk/lensa/kmccr/kaca/create', 'HomeController@create_kmccrkaca_masuk');
    Route::get('/barangkeluar/lensa/kmccr/kaca', 'HomeController@lensakeluarkmccrkaca')->name('lensakeluarkmccrkaca');
    Route::post('/barangkeluar/lensa/kmccr/kaca/create', 'HomeController@create_kmccrkaca_keluar');

    Route::get('/super/gudang/lensa/kmccr/kaca', 'SuperController@gudanglensakmccrkaca')->name('gudanglensakmccrkaca');
    Route::get('/super/barangmasuk/lensa/kmccr/kaca', 'SuperController@lensamasukkmccrkaca')->name('lensamasukkmccrkaca');
    Route::post('/super/barangmasuk/lensa/kmccr/kaca/create', 'SuperController@create_kmccrkaca_masuk');
    Route::get('/super/barangkeluar/lensa/kmccr/kaca', 'SuperController@lensakeluarkmccrkaca')->name('lensakeluarkmccrkaca');
    Route::post('/super/barangkeluar/lensa/kmccr/kaca/create', 'SuperController@create_kmccrkaca_keluar');

// Lensa leinz
    Route::get('/gudang/lensa/leinz', 'HomeController@gudanglensaleinz')->name('gudanglensaleinz');
    Route::get('/barangmasuk/lensa/leinz', 'HomeController@lensamasukleinz')->name('lensamasukleinz');
    Route::post('/barangmasuk/lensa/leinz/create', 'HomeController@create_leinz_masuk');
    Route::get('/barangkeluar/lensa/leinz', 'HomeController@lensakeluarleinz')->name('lensakeluarleinz');
    Route::post('/barangkeluar/lensa/leinz/create', 'HomeController@create_leinz_keluar');

    Route::get('/super/gudang/lensa/leinz', 'SuperController@gudanglensaleinz')->name('gudanglensaleinz');
    Route::get('/super/barangmasuk/lensa/leinz', 'SuperController@lensamasukleinz')->name('lensamasukleinz');
    Route::post('/super/barangmasuk/lensa/leinz/create', 'SuperController@create_leinz_masuk');
    Route::get('/super/barangkeluar/lensa/leinz', 'SuperController@lensakeluarleinz')->name('lensakeluarleinz');
    Route::post('/super/barangkeluar/lensa/leinz/create', 'SuperController@create_leinz_keluar');

// Toko

    Route::get('/tiara', 'HomeController@tiara')->name('tiara');
    Route::post('/tiara/create', 'HomeController@create_tiara');

    Route::get('/emeral', 'HomeController@emeral')->name('emeral');
    Route::post('/emeral/create', 'HomeController@create_emeral');

    Route::get('/super/tiara', 'SuperController@tiara')->name('tiara');
    Route::post('/super/tiara/create', 'SuperController@create_tiara');

    Route::get('/super/emeral', 'SuperController@emeral')->name('emeral');
    Route::post('/super/emeral/create', 'SuperController@create_emeral');

//Softlens Idol Black
    Route::get('/gudang/softlens/idolblack', 'HomeController@gudangsoftlensidolblack')->name('gudangsoftlensidolblack');
    Route::get('/barangmasuk/softlens/idolblack', 'HomeController@softlensmasukidolblack')->name('softlensmasukidolblack');
    Route::post('/barangmasuk/softlens/idolblack/create', 'HomeController@create_idolblack_masuk');
    Route::get('/barangkeluar/softlens/idolblack', 'HomeController@softlenskeluaridolblack')->name('softlenskeluaridolblack');
    Route::post('/barangkeluar/softlens/idolblack/create', 'HomeController@create_idolblack_keluar');

    Route::get('/super/gudang/softlens/idolblack', 'SuperController@gudangsoftlensidolblack')->name('gudangsoftlensidolblack');
    Route::get('/super/barangmasuk/softlens/idolblack', 'SuperController@softlensmasukidolblack')->name('softlensmasukidolblack');
    Route::post('/super/barangmasuk/softlens/idolblack/create', 'SuperController@create_idolblack_masuk');
    Route::get('/super/barangkeluar/softlens/idolblack', 'SuperController@softlenskeluaridolblack')->name('softlenskeluaridolblack');
    Route::post('/super/barangkeluar/softlens/idolblack/create', 'SuperController@create_idolblack_keluar');

//Softlens Idol grey
    Route::get('/gudang/softlens/idolgrey', 'HomeController@gudangsoftlensidolgrey')->name('gudangsoftlensidolgrey');
    Route::get('/barangmasuk/softlens/idolgrey', 'HomeController@softlensmasukidolgrey')->name('softlensmasukidolgrey');
    Route::post('/barangmasuk/softlens/idolgrey/create', 'HomeController@create_idolgrey_masuk');
    Route::get('/barangkeluar/softlens/idolgrey', 'HomeController@softlenskeluaridolgrey')->name('softlenskeluaridolgrey');
    Route::post('/barangkeluar/softlens/idolgrey/create', 'HomeController@create_idolgrey_keluar');

    Route::get('/super/gudang/softlens/idolgrey', 'SuperController@gudangsoftlensidolgrey')->name('gudangsoftlensidolgrey');
    Route::get('/super/barangmasuk/softlens/idolgrey', 'SuperController@softlensmasukidolgrey')->name('softlensmasukidolgrey');
    Route::post('/super/barangmasuk/softlens/idolgrey/create', 'SuperController@create_idolgrey_masuk');
    Route::get('/super/barangkeluar/softlens/idolgrey', 'SuperController@softlenskeluaridolgrey')->name('softlenskeluaridolgrey');
    Route::post('/super/barangkeluar/softlens/idolgrey/create', 'SuperController@create_idolgrey_keluar');

//Softlens Idol brown
    Route::get('/gudang/softlens/idolbrown', 'HomeController@gudangsoftlensidolbrown')->name('gudangsoftlensidolbrown');
    Route::get('/barangmasuk/softlens/idolbrown', 'HomeController@softlensmasukidolbrown')->name('softlensmasukidolbrown');
    Route::post('/barangmasuk/softlens/idolbrown/create', 'HomeController@create_idolbrown_masuk');
    Route::get('/barangkeluar/softlens/idolbrown', 'HomeController@softlenskeluaridolbrown')->name('softlenskeluaridolbrown');
    Route::post('/barangkeluar/softlens/idolbrown/create', 'HomeController@create_idolbrown_keluar');

    Route::get('/super/gudang/softlens/idolbrown', 'SuperController@gudangsoftlensidolbrown')->name('gudangsoftlensidolbrown');
    Route::get('/super/barangmasuk/softlens/idolbrown', 'SuperController@softlensmasukidolbrown')->name('softlensmasukidolbrown');
    Route::post('/super/barangmasuk/softlens/idolbrown/create', 'SuperController@create_idolbrown_masuk');
    Route::get('/super/barangkeluar/softlens/idolbrown', 'SuperController@softlenskeluaridolbrown')->name('softlenskeluaridolbrown');
    Route::post('/super/barangkeluar/softlens/idolbrown/create', 'SuperController@create_idolbrown_keluar');

//Softlens celebrity Black
    Route::get('/gudang/softlens/celebrityblack', 'HomeController@gudangsoftlenscelebrityblack')->name('gudangsoftlenscelebrityblack');
    Route::get('/barangmasuk/softlens/celebrityblack', 'HomeController@softlensmasukcelebrityblack')->name('softlensmasukcelebrityblack');
    Route::post('/barangmasuk/softlens/celebrityblack/create', 'HomeController@create_celebrityblack_masuk');
    Route::get('/barangkeluar/softlens/celebrityblack', 'HomeController@softlenskeluarcelebrityblack')->name('softlenskeluarcelebrityblack');
    Route::post('/barangkeluar/softlens/celebrityblack/create', 'HomeController@create_celebrityblack_keluar');

    Route::get('/super/gudang/softlens/celebrityblack', 'SuperController@gudangsoftlenscelebrityblack')->name('gudangsoftlenscelebrityblack');
    Route::get('/super/barangmasuk/softlens/celebrityblack', 'SuperController@softlensmasukcelebrityblack')->name('softlensmasukcelebrityblack');
    Route::post('/super/barangmasuk/softlens/celebrityblack/create', 'SuperController@create_celebrityblack_masuk');
    Route::get('/super/barangkeluar/softlens/celebrityblack', 'SuperController@softlenskeluarcelebrityblack')->name('softlenskeluarcelebrityblack');
    Route::post('/super/barangkeluar/softlens/celebrityblack/create', 'SuperController@create_celebrityblack_keluar');

//Softlens celebrity grey
    Route::get('/gudang/softlens/celebritygrey', 'HomeController@gudangsoftlenscelebritygrey')->name('gudangsoftlenscelebritygrey');
    Route::get('/barangmasuk/softlens/celebritygrey', 'HomeController@softlensmasukcelebritygrey')->name('softlensmasukcelebritygrey');
    Route::post('/barangmasuk/softlens/celebritygrey/create', 'HomeController@create_celebritygrey_masuk');
    Route::get('/barangkeluar/softlens/celebritygrey', 'HomeController@softlenskeluarcelebritygrey')->name('softlenskeluarcelebritygrey');
    Route::post('/barangkeluar/softlens/celebritygrey/create', 'HomeController@create_celebritygrey_keluar');

    Route::get('/super/gudang/softlens/celebritygrey', 'SuperController@gudangsoftlenscelebritygrey')->name('gudangsoftlenscelebritygrey');
    Route::get('/super/barangmasuk/softlens/celebritygrey', 'SuperController@softlensmasukcelebritygrey')->name('softlensmasukcelebritygrey');
    Route::post('/super/barangmasuk/softlens/celebritygrey/create', 'SuperController@create_celebritygrey_masuk');
    Route::get('/super/barangkeluar/softlens/celebritygrey', 'SuperController@softlenskeluarcelebritygrey')->name('softlenskeluarcelebritygrey');
    Route::post('/super/barangkeluar/softlens/celebritygrey/create', 'SuperController@create_celebritygrey_keluar');

//Softlens celebrity brown
    Route::get('/super/gudang/softlens/celebritybrown', 'HomeController@gudangsoftlenscelebritybrown')->name('gudangsoftlenscelebritybrown');
    Route::get('/super/barangmasuk/softlens/celebritybrown', 'HomeController@softlensmasukcelebritybrown')->name('softlensmasukcelebritybrown');
    Route::post('/super/barangmasuk/softlens/celebritybrown/create', 'HomeController@create_celebritybrown_masuk');
    Route::get('/super/barangkeluar/softlens/celebritybrown', 'HomeController@softlenskeluarcelebritybrown')->name('softlenskeluarcelebritybrown');
    Route::post('/super/barangkeluar/softlens/celebritybrown/create', 'HomeController@create_celebritybrown_keluar');

    Route::get('/super/gudang/softlens/celebritybrown', 'SuperController@gudangsoftlenscelebritybrown')->name('gudangsoftlenscelebritybrown');
    Route::get('/super/barangmasuk/softlens/celebritybrown', 'SuperController@softlensmasukcelebritybrown')->name('softlensmasukcelebritybrown');
    Route::post('/super/barangmasuk/softlens/celebritybrown/create', 'SuperController@create_celebritybrown_masuk');
    Route::get('/super/barangkeluar/softlens/celebritybrown', 'SuperController@softlenskeluarcelebritybrown')->name('softlenskeluarcelebritybrown');
    Route::post('/super/barangkeluar/softlens/celebritybrown/create', 'SuperController@create_celebritybrown_keluar');

//Softlens solution
    Route::get('/gudang/softlens/solution', 'HomeController@gudangsoftlenssolution')->name('gudangsoftlenssolution');
    Route::get('/barangmasuk/softlens/solution', 'HomeController@softlensmasuksolution')->name('softlensmasuksolution');
    Route::post('/barangmasuk/softlens/solution/create', 'HomeController@create_solution_masuk');
    Route::get('/barangkeluar/softlens/solution', 'HomeController@softlenskeluarsolution')->name('softlenskeluarsolution');
    Route::post('/barangkeluar/softlens/solution/create', 'HomeController@create_solution_keluar');

    Route::get('/super/gudang/softlens/solution', 'SuperController@gudangsoftlenssolution')->name('gudangsoftlenssolution');
    Route::get('/super/barangmasuk/softlens/solution', 'SuperController@softlensmasuksolution')->name('softlensmasuksolution');
    Route::post('/super/barangmasuk/softlens/solution/create', 'SuperController@create_solution_masuk');
    Route::get('/super/barangkeluar/softlens/solution', 'SuperController@softlenskeluarsolution')->name('softlenskeluarsolution');
    Route::post('/super/barangkeluar/softlens/solution/create', 'SuperController@create_solution_keluar');

// Frame Bpjs
    Route::get('/gudang/frame/bpjs', 'HomeController@gudangframebpjs')->name('gudangframebpjs');
    Route::get('/barangmasuk/frame/bpjs', 'HomeController@framemasukbpjs')->name('framemasukbpjs');
    Route::post('/barangmasuk/frame/bpjs/create', 'HomeController@create_bpjs_masuk');
    Route::get('/barangkeluar/frame/bpjs', 'HomeController@framekeluarbpjs')->name('framekeluarbpjs');
    Route::post('/barangkeluar/frame/bpjs/create', 'HomeController@create_bpjs_keluar');
    
    Route::post('/frame/bpjs/create', 'HomeController@create_bpjs');
    Route::post('/super/frame/bpjs/create', 'SuperController@create_bpjs');

    Route::get('/super/gudang/frame/bpjs', 'SuperController@gudangframebpjs')->name('gudangframebpjs');
    Route::get('/super/barangmasuk/frame/bpjs', 'SuperController@framemasukbpjs')->name('framemasukbpjs');
    Route::post('/super/barangmasuk/frame/bpjs/create', 'SuperController@create_bpjs_masuk');
    Route::get('/super/barangkeluar/frame/bpjs', 'SuperController@framekeluarbpjs')->name('framekeluarbpjs');
    Route::post('/super/barangkeluar/frame/bpjs/create', 'SuperController@create_bpjs_keluar');

// Frame Umum
    Route::get('/gudang/frame/umum', 'HomeController@gudangframeumum')->name('gudangframeumum');
    Route::get('/barangmasuk/frame/umum', 'HomeController@framemasukumum')->name('framemasukumum');
    Route::post('/barangmasuk/frame/umum/create', 'HomeController@create_umum_masuk');
    Route::get('/barangkeluar/frame/umum', 'HomeController@framekeluarumum')->name('framekeluarumum');
    Route::post('/barangkeluar/frame/umum/create', 'HomeController@create_umum_keluar');

    Route::post('/frame/umum/create', 'HomeController@create_umum');
    Route::post('/super/frame/umum/create', 'SuperController@create_umum');

    Route::get('/super/gudang/frame/umum', 'SuperController@gudangframeumum')->name('gudangframeumum');
    Route::get('/super/barangmasuk/frame/umum', 'SuperController@framemasukumum')->name('framemasukumum');
    Route::post('/super/barangmasuk/frame/umum/create', 'SuperController@create_umum_masuk');
    Route::get('/super/barangkeluar/frame/umum', 'SuperController@framekeluarumum')->name('framekeluarumum');
    Route::post('/super/barangkeluar/frame/umum/create', 'SuperController@create_umum_keluar');
// GUEST
    Route::get('/', 'GuestController@index')->name('guest');

// Import Excel
    Route::post('/gudang/lensa/mccr/import_excel', 'HomeController@gudanglensamccr_import_excel');
    Route::post('/gudang/lensa/mccrkaca/import_excel', 'HomeController@gudanglensamccrkaca_import_excel');
    Route::post('/gudang/lensa/block/import_excel', 'HomeController@gudanglensablock_import_excel');
    Route::post('/gudang/lensa/flexi/import_excel', 'HomeController@gudanglensaflexi_import_excel');
    Route::post('/gudang/lensa/grey/import_excel', 'HomeController@gudanglensagrey_import_excel');
    Route::post('/gudang/lensa/kmccr/import_excel', 'HomeController@gudanglensakmccr_import_excel');
    Route::post('/gudang/lensa/kmccrkaca/import_excel', 'HomeController@gudanglensakmccrkaca_import_excel');
    Route::post('/gudang/lensa/leinz/import_excel', 'HomeController@gudanglensaleinz_import_excel');
    Route::post('/gudang/softlens/idolblack/import_excel', 'HomeController@gudangsoftlensidolblack_import_excel');
    Route::post('/gudang/softlens/idolbrown/import_excel', 'HomeController@gudangsoftlensidolbrown_import_excel');
    Route::post('/gudang/softlens/idolgrey/import_excel', 'HomeController@gudangsoftlensidolgrey_import_excel');
    Route::post('/gudang/softlens/celebrityblack/import_excel', 'HomeController@gudangsoftlenscelebrityblack_import_excel');
    Route::post('/gudang/softlens/celebritybrown/import_excel', 'HomeController@gudangsoftlenscelebritybrown_import_excel');
    Route::post('/gudang/softlens/celebritygrey/import_excel', 'HomeController@gudangsoftlenscelebritygrey_import_excel');

    Route::post('/gudang/frame/umum/import_excel', 'HomeController@gudangframeumum_import_excel');
    Route::post('/gudang/frame/bpjs/import_excel', 'HomeController@gudangframebpjs_import_excel');

// Export Excel
    // Gudang
        Route::get('/gudang/lensa/mccr/export_excel', 'HomeController@gudanglensamccr_export_excel');
        Route::get('/gudang/lensa/mccrkaca/export_excel', 'HomeController@gudanglensamccrkaca_export_excel');
        Route::get('/gudang/lensa/block/export_excel', 'HomeController@gudanglensablock_export_excel');
        Route::get('/gudang/lensa/flexi/export_excel', 'HomeController@gudanglensaflexi_export_excel');
        Route::get('/gudang/lensa/grey/export_excel', 'HomeController@gudanglensagrey_export_excel');
        Route::get('/gudang/lensa/kmccr/export_excel', 'HomeController@gudanglensakmccr_export_excel');
        Route::get('/gudang/lensa/kmccrkaca/export_excel', 'HomeController@gudanglensakmccrkaca_export_excel');
        Route::get('/gudang/lensa/leinz/export_excel', 'HomeController@gudanglensaleinz_export_excel');

        Route::get('/gudang/softlens/celebrityblack/export_excel', 'HomeController@gudangsoftlenscelebrityblack_export_excel');
        Route::get('/gudang/softlens/idolblack/export_excel', 'HomeController@gudangsoftlensidolblack_export_excel');
        Route::get('/gudang/softlens/idolbrown/export_excel', 'HomeController@gudangsoftlensidolbrown_export_excel');
        Route::get('/gudang/softlens/idolgrey/export_excel', 'HomeController@gudangsoftlensidolgrey_export_excel');
        Route::get('/gudang/softlens/celebritybrown/export_excel', 'HomeController@gudangsoftlenscelebritybrown_export_excel');
        Route::get('/gudang/softlens/celebritygrey/export_excel', 'HomeController@gudangsoftlenscelebritygrey_export_excel');
        Route::get('/gudang/softlens/solution/export_excel', 'HomeController@gudangsoftlenssolution_export_excel');

        Route::get('/gudang/frame/umum/export_excel', 'HomeController@gudangframeumum_export_excel');
        Route::get('/gudang/frame/bpjs/export_excel', 'HomeController@gudangframebpjs_export_excel');

        Route::get('/gudang/frame/export_excel', 'HomeController@gudangframe_export_excel');
        Route::get('/gudang/frameoriginal/export_excel', 'HomeController@gudangframeoriginal_export_excel');

    // Keluar
        Route::get('/keluar/lensa/mccr/export_excel', 'HomeController@keluarlensamccr_export_excel');
        Route::get('/keluar/lensa/mccrkaca/export_excel', 'HomeController@keluarlensamccrkaca_export_excel');
        Route::get('/keluar/lensa/block/export_excel', 'HomeController@keluarlensablock_export_excel');
        Route::get('/keluar/lensa/flexi/export_excel', 'HomeController@keluarlensaflexi_export_excel');
        Route::get('/keluar/lensa/grey/export_excel', 'HomeController@keluarlensagrey_export_excel');
        Route::get('/keluar/lensa/kmccr/export_excel', 'HomeController@keluarlensakmccr_export_excel');
        Route::get('/keluar/lensa/kmccrkaca/export_excel', 'HomeController@keluarlensakmccrkaca_export_excel');
        Route::get('/keluar/lensa/leinz/export_excel', 'HomeController@keluarlensaleinz_export_excel');

        Route::get('/keluar/softlens/celebrityblack/export_excel', 'HomeController@keluarsoftlenscelebrityblack_export_excel');
        Route::get('/keluar/softlens/idolblack/export_excel', 'HomeController@keluarsoftlensidolblack_export_excel');
        Route::get('/keluar/softlens/idolbrown/export_excel', 'HomeController@keluarsoftlensidolbrown_export_excel');
        Route::get('/keluar/softlens/idolgrey/export_excel', 'HomeController@keluarsoftlensidolgrey_export_excel');
        Route::get('/keluar/softlens/celebritybrown/export_excel', 'HomeController@keluarsoftlenscelebritybrown_export_excel');
        Route::get('/keluar/softlens/celebritygrey/export_excel', 'HomeController@keluarsoftlenscelebritygrey_export_excel');
        Route::get('/keluar/softlens/solution/export_excel', 'HomeController@keluarsoftlenssolution_export_excel');

        Route::get('/keluar/frame/umum/export_excel', 'HomeController@keluarframeumum_export_excel');
        Route::get('/keluar/frame/bpjs/export_excel', 'HomeController@keluarframebpjs_export_excel');

        Route::get('/barangkeluar/frame/export_excel', 'HomeController@keluarframe_export_excel');
        Route::get('/barangkeluar/frameoriginal/export_excel', 'HomeController@keluarframeoriginal_export_excel');

    // Masuk
        Route::get('/masuk/lensa/mccr/export_excel', 'HomeController@masuklensamccr_export_excel');
        Route::get('/masuk/lensa/mccrkaca/export_excel', 'HomeController@masuklensamccrkaca_export_excel');
        Route::get('/masuk/lensa/block/export_excel', 'HomeController@masuklensablock_export_excel');
        Route::get('/masuk/lensa/flexi/export_excel', 'HomeController@masuklensaflexi_export_excel');
        Route::get('/masuk/lensa/grey/export_excel', 'HomeController@masuklensagrey_export_excel');
        Route::get('/masuk/lensa/kmccr/export_excel', 'HomeController@masuklensakmccr_export_excel');
        Route::get('/masuk/lensa/kmccrkaca/export_excel', 'HomeController@masuklensakmccrkaca_export_excel');
        Route::get('/masuk/lensa/leinz/export_excel', 'HomeController@masuklensaleinz_export_excel');

        Route::get('/masuk/softlens/celebrityblack/export_excel', 'HomeController@masuksoftlenscelebrityblack_export_excel');
        Route::get('/masuk/softlens/idolblack/export_excel', 'HomeController@masuksoftlensidolblack_export_excel');
        Route::get('/masuk/softlens/idolbrown/export_excel', 'HomeController@masuksoftlensidolbrown_export_excel');
        Route::get('/masuk/softlens/idolgrey/export_excel', 'HomeController@masuksoftlensidolgrey_export_excel');
        Route::get('/masuk/softlens/celebritybrown/export_excel', 'HomeController@masuksoftlenscelebritybrown_export_excel');
        Route::get('/masuk/softlens/celebritygrey/export_excel', 'HomeController@masuksoftlenscelebritygrey_export_excel');
        Route::get('/masuk/softlens/solution/export_excel', 'HomeController@masuksoftlenssolution_export_excel');
        
        Route::get('/masuk/frame/umum/export_excel', 'HomeController@masukframeumum_export_excel');
        Route::get('/masuk/frame/bpjs/export_excel', 'HomeController@masukframebpjs_export_excel');

        Route::get('/tiara/export', 'HomeController@tiara_export_excel');
        Route::get('/emeral/export', 'HomeController@emeral_export_excel');

// Export PDF
    Route::get('/laporan/cetak_pdf', 'HomeController@laporan_cetak_pdf');   

// Login logout multi level
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/login2', 'AuthController@postlogin')->name('login2');
    Route::get('/logout', 'AuthController@logout')->name('logout');  

// Edit Delet

    //Lensa
        Route::get('/lensablock/{id}/edit','SuperController@editlensablock');
        Route::post('/lensablock/{id}/update','SuperController@updatelensablock');
        Route::get('/lensablock/delete/{id}', 'SuperController@deletelensablock');
        Route::get('/lensablockmasuk/{id}/edit','SuperController@editlensablockmasuk');
        Route::post('/lensablockmasuk/{id}/update','SuperController@updatelensablockmasuk');
        Route::get('/lensablockmasuk/delete/{id}', 'SuperController@deletelensablockmasuk');
        Route::get('/lensablockkeluar/{id}/edit','SuperController@editlensablockkeluar');
        Route::post('/lensablockkeluar/{id}/update','SuperController@updatelensablockkeluar');
        Route::get('/lensablockkeluar/delete/{id}', 'SuperController@deletelensablockkeluar');

        Route::get('/lensaflexi/{id}/edit','SuperController@editlensaflexi');
        Route::post('/lensaflexi/{id}/update','SuperController@updatelensaflexi');
        Route::get('/lensaflexi/delete/{id}', 'SuperController@deletelensaflexi');
        Route::get('/lensafleximasuk/{id}/edit','SuperController@editlensafleximasuk');
        Route::post('/lensafleximasuk/{id}/update','SuperController@updatelensafleximasuk');
        Route::get('/lensafleximasuk/delete/{id}', 'SuperController@deletelensafleximasuk');
        Route::get('/lensaflexikeluar/{id}/edit','SuperController@editlensaflexikeluar');
        Route::post('/lensaflexikeluar/{id}/update','SuperController@updatelensaflexikeluar');
        Route::get('/lensaflexikeluar/delete/{id}', 'SuperController@deletelensaflexikeluar');

        Route::get('/lensagrey/{id}/edit','SuperController@editlensagrey');
        Route::post('/lensagrey/{id}/update','SuperController@updatelensagrey');
        Route::get('/lensagrey/delete/{id}', 'SuperController@deletelensagrey');
        Route::get('/lensagreymasuk/{id}/edit','SuperController@editlensagreymasuk');
        Route::post('/lensagreymasuk/{id}/update','SuperController@updatelensagreymasuk');
        Route::get('/lensagreymasuk/delete/{id}', 'SuperController@deletelensagreymasuk');
        Route::get('/lensagreykeluar/{id}/edit','SuperController@editlensagreykeluar');
        Route::post('/lensagreykeluar/{id}/update','SuperController@updatelensagreykeluar');
        Route::get('/lensagreykeluar/delete/{id}', 'SuperController@deletelensagreykeluar');

        Route::get('/lensakmccr/{id}/edit','SuperController@editlensakmccr');
        Route::post('/lensakmccr/{id}/update','SuperController@updatelensakmccr');
        Route::get('/lensakmccr/delete/{id}', 'SuperController@deletelensakmccr');
        Route::get('/lensakmccrmasuk/{id}/edit','SuperController@editlensakmccrmasuk');
        Route::post('/lensakmccrmasuk/{id}/update','SuperController@updatelensakmccrmasuk');
        Route::get('/lensakmccrmasuk/delete/{id}', 'SuperController@deletelensakmccrmasuk');
        Route::get('/lensakmccrkeluar/{id}/edit','SuperController@editlensakmccrkeluar');
        Route::post('/lensakmccrkeluar/{id}/update','SuperController@updatelensakmccrkeluar');
        Route::get('/lensakmccrkeluar/delete/{id}', 'SuperController@deletelensakmccrkeluar');

        Route::get('/lensakmccrkaca/{id}/edit','SuperController@editlensakmccrkaca');
        Route::post('/lensakmccrkaca/{id}/update','SuperController@updatelensakmccrkaca');
        Route::get('/lensakmccrkaca/delete/{id}', 'SuperController@deletelensakmccrkaca');
        Route::get('/lensakmccrkacamasuk/{id}/edit','SuperController@editlensakmccrkacamasuk');
        Route::post('/lensakmccrkacamasuk/{id}/update','SuperController@updatelensakmccrkacamasuk');
        Route::get('/lensakmccrkacamasuk/delete/{id}', 'SuperController@deletelensakmccrkacamasuk');
        Route::get('/lensakmccrkacakeluar/{id}/edit','SuperController@editlensakmccrkacakeluar');
        Route::post('/lensakmccrkacakeluar/{id}/update','SuperController@updatelensakmccrkacakeluar');
        Route::get('/lensakmccrkacakeluar/delete/{id}', 'SuperController@deletelensakmccrkacakeluar');

        Route::get('/lensamccr/{id}/edit','SuperController@editlensamccr');
        Route::post('/lensamccr/{id}/update','SuperController@updatelensamccr');
        Route::get('/lensamccr/delete/{id}', 'SuperController@deletelensamccr');
        Route::get('/lensamccrmasuk/{id}/edit','SuperController@editlensamccrmasuk');
        Route::post('/lensamccrmasuk/{id}/update','SuperController@updatelensamccrmasuk');
        Route::get('/lensamccrmasuk/delete/{id}', 'SuperController@deletelensamccrmasuk');
        Route::get('/lensamccrkeluar/{id}/edit','SuperController@editlensamccrkeluar');
        Route::post('/lensamccrkeluar/{id}/update','SuperController@updatelensamccrkeluar');
        Route::get('/lensamccrkeluar/delete/{id}', 'SuperController@deletelensamccrkeluar');
        
        Route::get('/lensamccrkaca/{id}/edit','SuperController@editlensamccrkaca');
        Route::post('/lensamccrkaca/{id}/update','SuperController@updatelensamccrkaca');
        Route::get('/lensamccrkaca/delete/{id}', 'SuperController@deletelensamccrkaca');
        Route::get('/lensamccrkacamasuk/{id}/edit','SuperController@editlensamccrkacamasuk');
        Route::post('/lensamccrkacamasuk/{id}/update','SuperController@updatelensamccrkacamasuk');
        Route::get('/lensamccrkacamasuk/delete/{id}', 'SuperController@deletelensamccrkacamasuk');
        Route::get('/lensamccrkacakeluar/{id}/edit','SuperController@editlensamccrkacakeluar');
        Route::post('/lensamccrkacakeluar/{id}/update','SuperController@updatelensamccrkacakeluar');
        Route::get('/lensamccrkacakeluar/delete/{id}', 'SuperController@deletelensamccrkacakeluar');

        Route::get('/lensaleinz/{id}/edit','SuperController@editlensaleinz');
        Route::post('/lensaleinz/{id}/update','SuperController@updatelensaleinz');
        Route::get('/lensaleinz/delete/{id}', 'SuperController@deletelensaleinz');
        Route::get('/lensaleinzmasuk/{id}/edit','SuperController@editlensaleinzmasuk');
        Route::post('/lensaleinzmasuk/{id}/update','SuperController@updatelensaleinzmasuk');
        Route::get('/lensaleinzmasuk/delete/{id}', 'SuperController@deletelensaleinzmasuk');
        Route::get('/lensaleinzkeluar/{id}/edit','SuperController@editlensaleinzkeluar');
        Route::post('/lensaleinzkeluar/{id}/update','SuperController@updatelensaleinzkeluar');
        Route::get('/lensaleinzkeluar/delete/{id}', 'SuperController@deletelensaleinzkeluar');

    // SOFTLENS
        Route::get('/celebrityblack/{id}/edit','SuperController@editcelebrityblack');
        Route::post('/celebrityblack/{id}/update','SuperController@updatecelebrityblack');
        Route::get('/celebrityblack/delete/{id}', 'SuperController@deletecelebrityblack');
        Route::get('/celebrityblackmasuk/{id}/edit','SuperController@editcelebrityblackmasuk');
        Route::post('/celebrityblackmasuk/{id}/update','SuperController@updatecelebrityblackmasuk');
        Route::get('/celebrityblackmasuk/delete/{id}', 'SuperController@deletecelebrityblackmasuk');
        Route::get('/celebrityblackkeluar/{id}/edit','SuperController@editcelebrityblackkeluar');
        Route::post('/celebrityblackkeluar/{id}/update','SuperController@updatecelebrityblackkeluar');
        Route::get('/celebrityblackkeluar/delete/{id}', 'SuperController@deletecelebrityblackkeluar');

        Route::get('/celebritybrown/{id}/edit','SuperController@editcelebritybrown');
        Route::post('/celebritybrown/{id}/update','SuperController@updatecelebritybrown');
        Route::get('/celebritybrown/delete/{id}', 'SuperController@deletecelebritybrown');
        Route::get('/celebritybrownmasuk/{id}/edit','SuperController@editcelebritybrownmasuk');
        Route::post('/celebritybrownmasuk/{id}/update','SuperController@updatecelebritybrownmasuk');
        Route::get('/celebritybrownmasuk/delete/{id}', 'SuperController@deletecelebritybrownmasuk');
        Route::get('/celebritybrownkeluar/{id}/edit','SuperController@editcelebritybrownkeluar');
        Route::post('/celebritybrownkeluar/{id}/update','SuperController@updatecelebritybrownkeluar');
        Route::get('/celebritybrownkeluar/delete/{id}', 'SuperController@deletecelebritybrownkeluar');

        Route::get('/celebritygrey/{id}/edit','SuperController@editcelebritygrey');
        Route::post('/celebritygrey/{id}/update','SuperController@updatecelebritygrey');
        Route::get('/celebritygrey/delete/{id}', 'SuperController@deletecelebritygrey');
        Route::get('/celebritygreymasuk/{id}/edit','SuperController@editcelebritygreymasuk');
        Route::post('/celebritygreymasuk/{id}/update','SuperController@updatecelebritygreymasuk');
        Route::get('/celebritygreymasuk/delete/{id}', 'SuperController@deletecelebritygreymasuk');
        Route::get('/celebritygreykeluar/{id}/edit','SuperController@editcelebritygreykeluar');
        Route::post('/celebritygreykeluar/{id}/update','SuperController@updatecelebritygreykeluar');
        Route::get('/celebritygreykeluar/delete/{id}', 'SuperController@deletecelebritygreykeluar');

        Route::get('/idolblack/{id}/edit','SuperController@editidolblack');
        Route::post('/idolblack/{id}/update','SuperController@updateidolblack');
        Route::get('/idolblack/delete/{id}', 'SuperController@deleteidolblack');
        Route::get('/idolblackmasuk/{id}/edit','SuperController@editidolblackmasuk');
        Route::post('/idolblackmasuk/{id}/update','SuperController@updateidolblackmasuk');
        Route::get('/idolblackmasuk/delete/{id}', 'SuperController@deleteidolblackmasuk');
        Route::get('/idolblackkeluar/{id}/edit','SuperController@editidolblackkeluar');
        Route::post('/idolblackkeluar/{id}/update','SuperController@updateidolblackkeluar');
        Route::get('/idolblackkeluar/delete/{id}', 'SuperController@deleteidolblackkeluar');

        Route::get('/idolbrown/{id}/edit','SuperController@editidolbrown');
        Route::post('/idolbrown/{id}/update','SuperController@updateidolbrown');
        Route::get('/idolbrown/delete/{id}', 'SuperController@deleteidolbrown');
        Route::get('/idolbrownmasuk/{id}/edit','SuperController@editidolbrownmasuk');
        Route::post('/idolbrownmasuk/{id}/update','SuperController@updateidolbrownmasuk');
        Route::get('/idolbrownmasuk/delete/{id}', 'SuperController@deleteidolbrownmasuk');
        Route::get('/idolbrownkeluar/{id}/edit','SuperController@editidolbrownkeluar');
        Route::post('/idolbrownkeluar/{id}/update','SuperController@updateidolbrownkeluar');
        Route::get('/idolbrownkeluar/delete/{id}', 'SuperController@deleteidolbrownkeluar');

        Route::get('/idolgrey/{id}/edit','SuperController@editidolgrey');
        Route::post('/idolgrey/{id}/update','SuperController@updateidolgrey');
        Route::get('/idolgrey/delete/{id}', 'SuperController@deleteidolgrey');
        Route::get('/idolgreymasuk/{id}/edit','SuperController@editidolgreymasuk');
        Route::post('/idolgreymasuk/{id}/update','SuperController@updateidolgreymasuk');
        Route::get('/idolgreymasuk/delete/{id}', 'SuperController@deleteidolgreymasuk');
        Route::get('/idolgreykeluar/{id}/edit','SuperController@editidolgreykeluar');
        Route::post('/idolgreykeluar/{id}/update','SuperController@updateidolgreykeluar');
        Route::get('/idolgreykeluar/delete/{id}', 'SuperController@deleteidolgreykeluar');

        Route::get('/solution/{id}/edit','SuperController@editsolution');
        Route::post('/solution/{id}/update','SuperController@updatesolution');
        Route::get('/solution/delete/{id}', 'SuperController@deletesolution');
        Route::get('/solutionmasuk/{id}/edit','SuperController@editsolutionmasuk');
        Route::post('/solutionmasuk/{id}/update','SuperController@updatesolutionmasuk');
        Route::get('/solutionmasuk/delete/{id}', 'SuperController@deletesolutionmasuk');
        Route::get('/solutionkeluar/{id}/edit','SuperController@editsolutionkeluar');
        Route::post('/solutionkeluar/{id}/update','SuperController@updatesolutionkeluar');
        Route::get('/solutionkeluar/delete/{id}', 'SuperController@deletesolutionkeluar');


    // laporan
        Route::get('/laporan/{id}/edit','SuperController@editlaporan');
        Route::post('/laporan/{id}/update','SuperController@updatelaporan');
        Route::get('/laporan/delete/{id}', 'SuperController@deletelaporan');

    // galeri
        Route::get('/galeri/{id}/edit','HomeController@editgaleri');
        Route::post('/galeri/{id}/update','HomeController@updategaleri');
        Route::get('/galeri/delete/{id}', 'HomeController@deletegaleri');
       
    // toko
        Route::get('/tiara/{id}/edit','SuperController@edittiara');
        Route::post('/tiara/{id}/update','SuperController@updatetiara');
        Route::get('/tiara/delete/{id}', 'SuperController@deletetiara');
        
        Route::get('/emeral/{id}/edit','SuperController@editemeral');
        Route::post('/emeral/{id}/update','SuperController@updateemeral');
        Route::get('/emeral/delete/{id}', 'SuperController@deleteemeral');

    // frame
        Route::get('/frameumum/{id}/edit','SuperController@editframeumum');
        Route::post('/frameumum/{id}/update','SuperController@updateframeumum');
        Route::get('/umum/{id}/edit','HomeController@editframeumum');
        Route::post('/umum/{id}/update','HomeController@updateframeumum');
        Route::get('/frameumum/delete/{id}', 'SuperController@deleteframeumum');
        Route::get('/frameumummasuk/{id}/edit','SuperController@editframeumummasuk');
        Route::post('/frameumummasuk/{id}/update','SuperController@updateframeumummasuk');
        Route::get('/frameumummasuk/delete/{id}', 'SuperController@deleteframeumummasuk');
        Route::get('/frameumumkeluar/{id}/edit','SuperController@editframeumumkeluar');
        Route::post('/frameumumkeluar/{id}/update','SuperController@updateframeumumkeluar');
        Route::get('/frameumumkeluar/delete/{id}', 'SuperController@deleteframeumumkeluar');
        
        Route::get('/framebpjs/{id}/edit','SuperController@editframebpjs');
        Route::post('/framebpjs/{id}/update','SuperController@updateframebpjs');
        Route::get('/bpjs/{id}/edit','HomeController@editframebpjs');
        Route::post('/bpjs/{id}/update','HomeController@updateframebpjs');
        Route::get('/framebpjs/delete/{id}', 'SuperController@deleteframebpjs');
        Route::get('/framebpjsmasuk/{id}/edit','SuperController@editframebpjsmasuk');
        Route::post('/framebpjsmasuk/{id}/update','SuperController@updateframebpjsmasuk');
        Route::get('/framebpjsmasuk/delete/{id}', 'SuperController@deleteframebpjsmasuk');
        Route::get('/framebpjskeluar/{id}/edit','SuperController@editframebpjskeluar');
        Route::post('/framebpjskeluar/{id}/update','SuperController@updateframebpjskeluar');
        Route::get('/framebpjskeluar/delete/{id}', 'SuperController@deleteframebpjskeluar');

        Route::get('/super/frame/{id}/edit','SuperController@editframe');
        Route::post('/super/frame/{id}/update','SuperController@updateframe');
        Route::get('/super/frame/delete/{id}', 'SuperController@deleteframe');
        Route::get('/frame/{id}/edit','HomeController@editframe');
        Route::post('/frame/{id}/update','HomeController@updateframe');
        Route::get('/frame/delete/{id}', 'HomeController@deleteframe');
        Route::get('/super/framekeluar/{id}/edit','SuperController@editframekeluar');
        Route::post('/super/framekeluar/{id}/update','SuperController@updateframekeluar');
        Route::get('/super/framekeluar/delete/{id}', 'SuperController@deleteframekeluar');
        
        Route::get('/super/frameoriginal/{id}/edit','SuperController@editframeoriginal');
        Route::post('/super/frameoriginal/{id}/update','SuperController@updateframeoriginal');
        Route::get('/super/frameoriginal/delete/{id}', 'SuperController@deleteframeoriginal');
        Route::get('/frameoriginal/{id}/edit','HomeController@editframeoriginal');
        Route::post('/frameoriginal/{id}/update','HomeController@updateframeoriginal');
        Route::get('/frameoriginal/delete/{id}', 'HomeController@deleteframeoriginal');
        Route::get('/super/frameoriginalkeluar/{id}/edit','SuperController@editframeoriginalkeluar');
        Route::post('/super/frameoriginalkeluar/{id}/update','SuperController@updateframeoriginalkeluar');
        Route::get('/super/frameoriginalkeluar/delete/{id}', 'SuperController@deleteframeoriginalkeluar');