<?php

namespace App\Http\Controllers;

use App\User;
use App\solution;
use App\laporan;
use App\galeri;
use App\framebpjs;
use App\frameumum;
use App\frame;
use App\frameoriginal;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Imports\LensaMccrImport;
use App\Imports\LensaMccrKacaImport;
use App\Imports\LensaFlexiImport;
use App\Imports\LensaBlockImport;
use App\Imports\LensaGreyImport;
use App\Imports\LensaKmccrImport;
use App\Imports\LensaKmccrKacaImport;
use App\Imports\LensaLeinzImport;
use App\Imports\CelebrityBlackImport;
use App\Imports\CelebrityBrownImport;
use App\Imports\CelebrityGreyImport;
use App\Imports\IdolBlackImport;
use App\Imports\IdolBrownImport;
use App\Imports\IdolGreyImport;
use App\Imports\FrameBpjsImport;
use App\Imports\FrameUmumImport;

use App\Exports\LensaMccrExport;
use App\Exports\LensaMccrKacaExport;
use App\Exports\LensaFlexiExport;
use App\Exports\LensaBlockExport;
use App\Exports\LensaGreyExport;
use App\Exports\LensaKmccrKacaExport;
use App\Exports\LensaKmccrExport;
use App\Exports\LensaLeinzExport;
use App\Exports\CelebrityBlackExport;
use App\Exports\CelebrityBrownExport;
use App\Exports\CelebrityGreyExport;
use App\Exports\IdolBlackExport;
use App\Exports\IdolBrownExport;
use App\Exports\IdolGreyExport;
use App\Exports\SolutionExport;

use App\Exports\LensaMccrKeluarExport;
use App\Exports\LensaMccrKacaKeluarExport;
use App\Exports\LensaFlexiKeluarExport;
use App\Exports\LensaBlockKeluarExport;
use App\Exports\LensaGreyKeluarExport;
use App\Exports\LensaKmccrKeluarExport;
use App\Exports\LensaKmccrKacaKeluarExport;
use App\Exports\LensaLeinzKeluarExport;
use App\Exports\CelebrityBlackKeluarExport;
use App\Exports\CelebrityBrownKeluarExport;
use App\Exports\CelebrityGreyKeluarExport;
use App\Exports\IdolBlackKeluarExport;
use App\Exports\IdolBrownKeluarExport;
use App\Exports\IdolGreyKeluarExport;
use App\Exports\SolutionKeluarExport;

use App\Exports\LensaMccrMasukExport;
use App\Exports\LensaMccrKacaMasukExport;
use App\Exports\LensaFlexiMasukExport;
use App\Exports\LensaBlockMasukExport;
use App\Exports\LensaGreyMasukExport;
use App\Exports\LensaKmccrMasukExport;
use App\Exports\LensaKmccrKacaMasukExport;
use App\Exports\LensaLeinzMasukExport;
use App\Exports\CelebrityBlackMasukExport;
use App\Exports\CelebrityBrownMasukExport;
use App\Exports\CelebrityGreyMasukExport;
use App\Exports\IdolBlackMasukExport;
use App\Exports\IdolBrownMasukExport;
use App\Exports\IdolGreyMasukExport;
use App\Exports\SolutionMasukExport;
use App\Exports\FrameBpjsExport;
use App\Exports\FrameUmumExport;
use App\Exports\FrameExport;
use App\Exports\FrameOriginalExport;
use App\Exports\FrameKeluarExport;
use App\Exports\FrameOriginalKeluarExport;
use App\Exports\TiaraExport;
use App\Exports\EmeralExport;


use Maatwebsite\Excel\Facades\Excel;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

// Galeri

    public function galeri(Request $request)
    {
        $data_galeri = \App\galeri::all();
        return view('admin.galeri',['data_galeri' => $data_galeri]);
    }

    public function create_galeri(Request $request)
    {    
        $galeri = \App\galeri::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $galeri->gambar = $request->file('gambar')->getClientOriginalName();
            $galeri->save();
        }
        return redirect('/galeri');
    }

    public function editgaleri($id)
    {
        $galeri = \App\galeri::find($id);
        return view('admin.editgaleri',['galeri' => $galeri]);
    }

    public function updategaleri(Request $request,$id)
    {
        $galeri = \App\galeri::find($id);
        $galeri->update($request->all());
        return redirect('/galeri')->with('sukses');
    }

    public function deletegaleri($id)
    {
        $galeri = galeri::FindOrFail($id);
        $galeri->delete();
        return redirect('/galeri')->with('hapus');
    }

// GUDANG

    public function gudanglensa()
    {
        return view('admin.lensa_gudang');
    }

    public function gudangsoftlens()
    {
        return view('admin.softlens_gudang');
    }

    public function gudangframe()
    {
        return view('admin.frame_gudang');
    }

// Frame
    public function editframebpjs($id)
    {
        $data = \App\framebpjs::find($id);
        return view('admin.editframebpjs',['data' => $data]);
    }

    public function updateframebpjs(Request $request,$id)
    {
        $data = \App\framebpjs::find($id);
        $data->update($request->all());
        return redirect('/framebpjs')->with('sukses');
    }

    public function editframeumum($id)
    {
        $data = \App\frameumum::find($id);
        return view('admin.editframeumum',['data' => $data]);
    }

    public function updateframeumum(Request $request,$id)
    {
        $data = \App\frameumum::find($id);
        $data->update($request->all());
        return redirect('/frameumum')->with('sukses');
    }

    public function framebpjs()
    {
        $data_framebpjs = \App\framebpjs::all();
        return view('admin.framebpjs',['data_framebpjs' => $data_framebpjs]);
    }
    
    public function frameumum()
    {
        $data_frameumum = \App\frameumum::all();
        return view('admin.frameumum',['data_frameumum' => $data_frameumum]);
    }
    public function create_bpjs(Request $request)
    {    
        \App\framebpjs::create($request->all());
        return redirect('/framebpjs');
    }

    public function create_umum(Request $request)
    {    
        \App\frameumum::create($request->all());
        return redirect('/frameumum');
    }
// MASUK
    
    public function lensamasuk()
    {
        return view('admin.lensa_masuk');
    }
    
    public function framemasuk()
    {
        return view('admin.frame_masuk');
    }
    
    public function softlensmasuk()
    {
        return view('admin.softlens_masuk');
    }
// KELUAR

    public function lensakeluar()
    {
        return view('admin.lensa_keluar');
    }

    public function softlenskeluar()
    {
        return view('admin.softlens_keluar');
    }

    public function framekeluar()
    {
        return view('admin.frame_keluar');
    }


// Lensa MCCR

    public function gudanglensamccr(Request $request)
    {
        $data_lensa_mccr = \App\lensa_mccr::all();
        return view('admin.lensa_mccr',['data_lensa_mccr' => $data_lensa_mccr]);
    }

    public function lensamasukmccr(Request $request)
    {
        $lensa_mccr_masuk = \App\lensa_mccr_masuk::all();
        return view('admin.lensa_mccr_masuk',['lensa_mccr_masuk' => $lensa_mccr_masuk]);
    }

    public function create_mccr_masuk(Request $request)
    {    
        \App\lensa_mccr_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/mccr');
    }

    public function lensakeluarmccr(Request $request)
    {
        $lensa_mccr_keluar = \App\lensa_mccr_keluar::all();
        return view('admin.lensa_mccr_keluar',['lensa_mccr_keluar' => $lensa_mccr_keluar]);
    }

    public function create_mccr_keluar(Request $request)
    {    
        \App\lensa_mccr_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/mccr');
    }

// Lensa block

    public function gudanglensablock(Request $request)
    {
        $data_lensa_block = \App\lensa_block::all();
        return view('admin.lensa_block',['data_lensa_block' => $data_lensa_block]);
    }

    public function lensamasukblock(Request $request)
    {
        $lensa_block_masuk = \App\lensa_block_masuk::all();
        return view('admin.lensa_block_masuk',['lensa_block_masuk' => $lensa_block_masuk]);
    }

    public function create_block_masuk(Request $request)
    {    
        \App\lensa_block_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/block');
    }

    public function lensakeluarblock(Request $request)
    {
        $lensa_block_keluar = \App\lensa_block_keluar::all();
        return view('admin.lensa_block_keluar',['lensa_block_keluar' => $lensa_block_keluar]);
    }

    public function create_block_keluar(Request $request)
    {    
        \App\lensa_block_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/block');
    }

    // Lensa flexi

    public function gudanglensaflexi(Request $request)
    {
        $data_lensa_flexi = \App\lensa_flexi::all();
        return view('admin.lensa_flexi',['data_lensa_flexi' => $data_lensa_flexi]);
    }

    public function lensamasukflexi(Request $request)
    {
        $lensa_flexi_masuk = \App\lensa_flexi_masuk::all();
        return view('admin.lensa_flexi_masuk',['lensa_flexi_masuk' => $lensa_flexi_masuk]);
    }

    public function create_flexi_masuk(Request $request)
    {    
        \App\lensa_flexi_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/flexi');
    }

    public function lensakeluarflexi(Request $request)
    {
        $lensa_flexi_keluar = \App\lensa_flexi_keluar::all();
        return view('admin.lensa_flexi_keluar',['lensa_flexi_keluar' => $lensa_flexi_keluar]);
    }

    public function create_flexi_keluar(Request $request)
    {    
        \App\lensa_flexi_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/flexi');
    }

// Lensa grey

    public function gudanglensagrey(Request $request)
    {
        $data_lensa_grey = \App\lensa_grey::all();
        return view('admin.lensa_grey',['data_lensa_grey' => $data_lensa_grey]);
    }

    public function lensamasukgrey(Request $request)
    {
        $lensa_grey_masuk = \App\lensa_grey_masuk::all();
        return view('admin.lensa_grey_masuk',['lensa_grey_masuk' => $lensa_grey_masuk]);
    }

    public function create_grey_masuk(Request $request)
    {    
        \App\lensa_grey_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/grey');
    }

    public function lensakeluargrey(Request $request)
    {
        $lensa_grey_keluar = \App\lensa_grey_keluar::all();
        return view('admin.lensa_grey_keluar',['lensa_grey_keluar' => $lensa_grey_keluar]);
    }

    public function create_grey_keluar(Request $request)
    {    
        \App\lensa_grey_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/grey');
    }

// Lensa kmccr

    public function gudanglensakmccr(Request $request)
    {
        $data_lensa_kmccr = \App\lensa_kmccr::all();
        return view('admin.lensa_kmccr',['data_lensa_kmccr' => $data_lensa_kmccr]);
    }

    public function lensamasukkmccr(Request $request)
    {
        $lensa_kmccr_masuk = \App\lensa_kmccr_masuk::all();
        return view('admin.lensa_kmccr_masuk',['lensa_kmccr_masuk' => $lensa_kmccr_masuk]);
    }

    public function create_kmccr_masuk(Request $request)
    {    
        \App\lensa_kmccr_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/kmccr');
    }

    public function lensakeluarkmccr(Request $request)
    {
        $lensa_kmccr_keluar = \App\lensa_kmccr_keluar::all();
        return view('admin.lensa_kmccr_keluar',['lensa_kmccr_keluar' => $lensa_kmccr_keluar]);
    }

    public function create_kmccr_keluar(Request $request)
    {    
        \App\lensa_kmccr_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/kmccr');
    }

// Lensa kmccr kaca

    public function gudanglensakmccrkaca(Request $request)
    {
    $data_lensa_kmccrkaca = \App\lensa_kmccrkaca::all();
    return view('admin.lensa_kmccrkaca',['data_lensa_kmccrkaca' => $data_lensa_kmccrkaca]);
    }

    public function lensamasukkmccrkaca(Request $request)
    {
    $lensa_kmccrkaca_masuk = \App\lensa_kmccrkaca_masuk::all();
    return view('admin.lensa_kmccrkaca_masuk',['lensa_kmccrkaca_masuk' => $lensa_kmccrkaca_masuk]);
    }

    public function create_kmccrkaca_masuk(Request $request)
    {    
    \App\lensa_kmccrkaca_masuk::create($request->all());
    return redirect('/barangmasuk/lensa/kmccr/kaca');
    }

    public function lensakeluarkmccrkaca(Request $request)
    {
    $lensa_kmccrkaca_keluar = \App\lensa_kmccrkaca_keluar::all();
    return view('admin.lensa_kmccrkaca_keluar',['lensa_kmccrkaca_keluar' => $lensa_kmccrkaca_keluar]);
    }

    public function create_kmccrkaca_keluar(Request $request)
    {    
    \App\lensa_kmccrkaca_keluar::create($request->all());
    return redirect('/barangkeluar/lensa/kmccr/kaca');
    }

// Lensa MCCR kaca

    public function gudanglensamccrkaca(Request $request)
    {
    $data_lensa_mccrkaca = \App\lensa_mccrkaca::all();
    return view('admin.lensa_mccrkaca',['data_lensa_mccrkaca' => $data_lensa_mccrkaca]);
    }

    public function lensamasukmccrkaca(Request $request)
    {
    $lensa_mccrkaca_masuk = \App\lensa_mccrkaca_masuk::all();
    return view('admin.lensa_mccrkaca_masuk',['lensa_mccrkaca_masuk' => $lensa_mccrkaca_masuk]);
    }

    public function create_mccrkaca_masuk(Request $request)
    {    
    \App\lensa_mccrkaca_masuk::create($request->all());
    return redirect('/barangmasuk/lensa/mccr/kaca');
    }

    public function lensakeluarmccrkaca(Request $request)
    {
    $lensa_mccrkaca_keluar = \App\lensa_mccrkaca_keluar::all();
    return view('admin.lensa_mccrkaca_keluar',['lensa_mccrkaca_keluar' => $lensa_mccrkaca_keluar]);
    }

    public function create_mccrkaca_keluar(Request $request)
    {    
    \App\lensa_mccrkaca_keluar::create($request->all());
    return redirect('/barangkeluar/lensa/mccr/kaca');
    }


// Lensa leinz

    public function gudanglensaleinz(Request $request)
    {
        $data_lensa_leinz = \App\lensa_leinz::all();
        return view('admin.lensa_leinz',['data_lensa_leinz' => $data_lensa_leinz]);
    }

    public function lensamasukleinz(Request $request)
    {
        $lensa_leinz_masuk = \App\lensa_leinz_masuk::all();
        return view('admin.lensa_leinz_masuk',['lensa_leinz_masuk' => $lensa_leinz_masuk]);
    }

    public function create_leinz_masuk(Request $request)
    {    
        \App\lensa_leinz_masuk::create($request->all());
        return redirect('/barangmasuk/lensa/leinz');
    }

    public function lensakeluarleinz(Request $request)
    {
        $lensa_leinz_keluar = \App\lensa_leinz_keluar::all();
        return view('admin.lensa_leinz_keluar',['lensa_leinz_keluar' => $lensa_leinz_keluar]);
    }

    public function create_leinz_keluar(Request $request)
    {    
        \App\lensa_leinz_keluar::create($request->all());
        return redirect('/barangkeluar/lensa/leinz');
    }

// Idol Black

    public function gudangsoftlensidolblack(Request $request)
    {
        $data_idol_black = \App\idol_black::all();
        return view('admin.idol_black',['data_idol_black' => $data_idol_black]);
    }

    public function softlensmasukidolblack(Request $request)
    {
        $idol_black_masuk = \App\idol_black_masuk::all();
        return view('admin.idol_black_masuk',['idol_black_masuk' => $idol_black_masuk]);
    }

    public function create_idolblack_masuk(Request $request)
    {    
        \App\idol_black_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/idolblack');
    }

    public function softlenskeluaridolblack(Request $request)
    {
        $idol_black_keluar = \App\idol_black_keluar::all();
        return view('admin.idol_black_keluar',['idol_black_keluar' => $idol_black_keluar]);
    }

    public function create_idolblack_keluar(Request $request)
    {    
        \App\idol_black_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/idolblack');
    }

// Idol grey

    public function gudangsoftlensidolgrey(Request $request)
    {
        $data_idol_grey = \App\idol_grey::all();
        return view('admin.idol_grey',['data_idol_grey' => $data_idol_grey]);
    }

    public function softlensmasukidolgrey(Request $request)
    {
        $idol_grey_masuk = \App\idol_grey_masuk::all();
        return view('admin.idol_grey_masuk',['idol_grey_masuk' => $idol_grey_masuk]);
    }

    public function create_idolgrey_masuk(Request $request)
    {    
        \App\idol_grey_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/idolgrey');
    }

    public function softlenskeluaridolgrey(Request $request)
    {
        $idol_grey_keluar = \App\idol_grey_keluar::all();
        return view('admin.idol_grey_keluar',['idol_grey_keluar' => $idol_grey_keluar]);
    }

    public function create_idolgrey_keluar(Request $request)
    {    
        \App\idol_grey_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/idolgrey');
    }

// Idol brown

    public function gudangsoftlensidolbrown(Request $request)
    {
        $data_idol_brown = \App\idol_brown::all();
        return view('admin.idol_brown',['data_idol_brown' => $data_idol_brown]);
    }

    public function softlensmasukidolbrown(Request $request)
    {
        $idol_brown_masuk = \App\idol_brown_masuk::all();
        return view('admin.idol_brown_masuk',['idol_brown_masuk' => $idol_brown_masuk]);
    }

    public function create_idolbrown_masuk(Request $request)
    {    
        \App\idol_brown_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/idolbrown');
    }

    public function softlenskeluaridolbrown(Request $request)
    {
        $idol_brown_keluar = \App\idol_brown_keluar::all();
        return view('admin.idol_brown_keluar',['idol_brown_keluar' => $idol_brown_keluar]);
    }

    public function create_idolbrown_keluar(Request $request)
    {    
        \App\idol_brown_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/idolbrown');
    }

// Celebrity Black

    public function gudangsoftlenscelebrityblack(Request $request)
    {
        $data_celebrity_black = \App\celebrity_black::all();
        return view('admin.celebrity_black',['data_celebrity_black' => $data_celebrity_black]);
    }

    public function softlensmasukcelebrityblack(Request $request)
    {
        $celebrity_black_masuk = \App\celebrity_black_masuk::all();
        return view('admin.celebrity_black_masuk',['celebrity_black_masuk' => $celebrity_black_masuk]);
    }

    public function create_celebrityblack_masuk(Request $request)
    {    
        \App\celebrity_black_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/celebrityblack');
    }

    public function softlenskeluarcelebrityblack(Request $request)
    {
        $celebrity_black_keluar = \App\celebrity_black_keluar::all();
        return view('admin.celebrity_black_keluar',['celebrity_black_keluar' => $celebrity_black_keluar]);
    }

    public function create_celebrityblack_keluar(Request $request)
    {    
        \App\celebrity_black_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/celebrityblack');
    }

// Celebrity grey

    public function gudangsoftlenscelebritygrey(Request $request)
    {
        $data_celebrity_grey = \App\celebrity_grey::all();
        return view('admin.celebrity_grey',['data_celebrity_grey' => $data_celebrity_grey]);
    }

    public function softlensmasukcelebritygrey(Request $request)
    {
        $celebrity_grey_masuk = \App\celebrity_grey_masuk::all();
        return view('admin.celebrity_grey_masuk',['celebrity_grey_masuk' => $celebrity_grey_masuk]);
    }

    public function create_celebritygrey_masuk(Request $request)
    {    
        \App\celebrity_grey_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/celebritygrey');
    }

    public function softlenskeluarcelebritygrey(Request $request)
    {
        $celebrity_grey_keluar = \App\celebrity_grey_keluar::all();
        return view('admin.celebrity_grey_keluar',['celebrity_grey_keluar' => $celebrity_grey_keluar]);
    }

    public function create_celebritygrey_keluar(Request $request)
    {    
        \App\celebrity_grey_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/celebritygrey');
    }

// Celebrity brown

    public function gudangsoftlenscelebritybrown(Request $request)
    {
        $data_celebrity_brown = \App\celebrity_brown::all();
        return view('admin.celebrity_brown',['data_celebrity_brown' => $data_celebrity_brown]);
    }

    public function softlensmasukcelebritybrown(Request $request)
    {
        $celebrity_brown_masuk = \App\celebrity_brown_masuk::all();
        return view('admin.celebrity_brown_masuk',['celebrity_brown_masuk' => $celebrity_brown_masuk]);
    }

    public function create_celebritybrown_masuk(Request $request)
    {    
        \App\celebrity_brown_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/celebritybrown');
    }

    public function softlenskeluarcelebritybrown(Request $request)
    {
        $celebrity_brown_keluar = \App\celebrity_brown_keluar::all();
        return view('admin.celebrity_brown_keluar',['celebrity_brown_keluar' => $celebrity_brown_keluar]);
    }

    public function create_celebritybrown_keluar(Request $request)
    {    
        \App\celebrity_brown_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/celebritybrown');
    }

// solution

    public function gudangsoftlenssolution(Request $request)
    {
        $data_solution = \App\solution::all();
        return view('admin.solution',['data_solution' => $data_solution]);
    }

    public function softlensmasuksolution(Request $request)
    {
        $solution_masuk = \App\solution_masuk::all();
        return view('admin.solution_masuk',['solution_masuk' => $solution_masuk]);
    }

    public function create_solution_masuk(Request $request)
    {    
        \App\solution_masuk::create($request->all());
        return redirect('/barangmasuk/softlens/solution');
    }

    public function softlenskeluarsolution(Request $request)
    {
        $solution_keluar = \App\solution_keluar::all();
        return view('admin.solution_keluar',['solution_keluar' => $solution_keluar]);
    }

    public function create_solution_keluar(Request $request)
    {    
        \App\solution_keluar::create($request->all());
        return redirect('/barangkeluar/softlens/solution');
    }

// Frame Biasa

    public function gudang_frame(Request $request)
    {
        $data_frame = \App\frame::all();
        return view('admin.frame',['data_frame' => $data_frame]);
    }

    public function create_frame_masuk(Request $request)
    {    
        \App\frame::create($request->all());
        return redirect('/gudang/framebiasa');
    }

    public function frame_keluar(Request $request)
    {
        $frame_keluar = \App\frame_keluar::all();
        return view('admin.framekeluar',['frame_keluar' => $frame_keluar]);
    }

    public function create_frame_keluar(Request $request)
    {    
        \App\frame_keluar::create($request->all());
        return redirect('/barangkeluar/framebiasa');
    }

    public function editframe($id)
    {
        $data = \App\frame::find($id);
        return view('admin.editframe',['data' => $data]);
    }

    public function updateframe(Request $request,$id)
    {
        $data = \App\frame::find($id);
        $data->update($request->all());
        return redirect('/gudang/framebiasa')->with('sukses');
    }

    public function deleteframe($id)
    {
        $data = frame::FindOrFail($id);
        $data->delete();
        return redirect('/gudang/framebiasa')->with('hapus');
    }

// Frame Original

    public function gudang_frameoriginal(Request $request)
    {
        $data_frameoriginal = \App\frameoriginal::all();
        return view('admin.frameoriginal',['data_frameoriginal' => $data_frameoriginal]);
    }

    public function create_frameoriginal_masuk(Request $request)
    {    
        \App\frameoriginal::create($request->all());
        return redirect('/gudang/frameoriginal');
    }

    public function frameoriginal_keluar(Request $request)
    {
        $frameoriginal_keluar = \App\frameoriginal_keluar::all();
        return view('admin.frameoriginal_keluar',['frameoriginal_keluar' => $frameoriginal_keluar]);
    }

    public function create_frameoriginal_keluar(Request $request)
    {    
        \App\frameoriginal_keluar::create($request->all());
        return redirect('/barangkeluar/frameoriginal');
    }

    public function editframeoriginal($id)
    {
        $data = \App\frameoriginal::find($id);
        return view('admin.editframeoriginal',['data' => $data]);
    }

    public function updateframeoriginal(Request $request,$id)
    {
        $data = \App\frameoriginal::find($id);
        $data->update($request->all());
        return redirect('/gudang/frameoriginal')->with('sukses');
    }

    public function deleteframeoriginal($id)
    {
        $data = frameoriginal::FindOrFail($id);
        $data->delete();
        return redirect('/gudang/frameoriginal')->with('hapus');
    }

// Frame bpjs

    public function gudangframebpjs(Request $request)
    {
        $data_bpjs = \App\bpjs::all();
        return view('admin.bpjs',['data_bpjs' => $data_bpjs]);
    }

    public function framemasukbpjs(Request $request)
    {
        $bpjs_masuk = \App\bpjs_masuk::all();
        return view('admin.bpjs_masuk',['bpjs_masuk' => $bpjs_masuk]);
    }

    public function create_bpjs_masuk(Request $request)
    {    
        \App\bpjs_masuk::create($request->all());
        return redirect('/barangmasuk/frame/bpjs');
    }

    public function framekeluarbpjs(Request $request)
    {
        $bpjs_keluar = \App\bpjs_keluar::all();
        return view('admin.bpjs_keluar',['bpjs_keluar' => $bpjs_keluar]);
    }

    public function create_bpjs_keluar(Request $request)
    {    
        \App\bpjs_keluar::create($request->all());
        return redirect('/barangkeluar/frame/bpjs');
    }

// Frame umum

    public function gudangframeumum(Request $request)
    {
        $data_umum = \App\umum::all();
        return view('admin.umum',['data_umum' => $data_umum]);
    }

    public function framemasukumum(Request $request)
    {
        $umum_masuk = \App\umum_masuk::all();
        return view('admin.umum_masuk',['umum_masuk' => $umum_masuk]);
    }

    public function create_umum_masuk(Request $request)
    {    
        \App\umum_masuk::create($request->all());
        return redirect('/barangmasuk/frame/umum');
    }

    public function framekeluarumum(Request $request)
    {
        $umum_keluar = \App\umum_keluar::all();
        return view('admin.umum_keluar',['umum_keluar' => $umum_keluar]);
    }

    public function create_umum_keluar(Request $request)
    {    
        \App\umum_keluar::create($request->all());
        return redirect('/barangkeluar/frame/umum');
    }

// Laporan

    public function laporan(Request $request)
    {
        $data_laporan = \App\laporan::all();
        return view('admin.laporan',['data_laporan' => $data_laporan]);
    }

    public function create_laporan(Request $request)
    {    
        $laporan = \App\laporan::create($request->all());
        if($request->hasFile('invoice')){
            $request->file('invoice')->move('images/',$request->file('invoice')->getClientOriginalName());
            $laporan->invoice = $request->file('invoice')->getClientOriginalName();
            $laporan->save();
        }
        return redirect('/laporan');
    }
    
// Export PDF
    public function laporan_cetak_pdf(Request $request)
        {
            set_time_limit(300);
            $data_laporan = \App\laporan::all();
    
            $pdf = PDF::loadview('admin.laporan_pdf',['data_laporan'=>$data_laporan]);
            return $pdf->stream();

        }

// Toko
    public function emeral(Request $request)
    {
        $emeral = \App\emeral::all();
        return view('admin.emeral',['emeral' => $emeral]);
    }

    public function create_emeral(Request $request)
    {    
        \App\emeral::create($request->all());
        return redirect('/emeral');
    }
    
    public function tiara(Request $request)
    {
        $tiara = \App\tiara::all();
        return view('admin.tiara',['tiara' => $tiara]);
    }

    public function create_tiara(Request $request)
    {    
        \App\tiara::create($request->all());
        return redirect('/tiara');
    }

// Import

    public function gudanglensamccr_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_mccr',$nama_file);
    
        // import data
        Excel::import(new LensaMccrImport, public_path('/file_lensa_mccr/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/mccr');
    }
    
    public function gudanglensamccrkaca_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_mccrkaca',$nama_file);
    
        // import data
        Excel::import(new LensaMccrKacaImport, public_path('/file_lensa_mccrkaca/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/mccr/kaca');
    }

    public function gudanglensablock_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_block',$nama_file);
    
        // import data
        Excel::import(new LensaBlockImport, public_path('/file_lensa_block/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/block');
    }

    public function gudanglensaflexi_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_flexi',$nama_file);
    
        // import data
        Excel::import(new LensaFlexiImport, public_path('/file_lensa_flexi/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/flexi');
    }
    public function gudanglensagrey_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_grey',$nama_file);
    
        // import data
        Excel::import(new LensaGreyImport, public_path('/file_lensa_grey/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/grey');
    }

    public function gudanglensakmccr_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_kmccr',$nama_file);
    
        // import data
        Excel::import(new LensaKmccrImport, public_path('/file_lensa_kmccr/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/kmccr');
    }

    public function gudanglensakmccrkaca_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_kmccrkaca',$nama_file);
    
        // import data
        Excel::import(new LensaKmccrKacaImport, public_path('/file_lensa_kmccrkaca/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/kmccr/kaca');
    }

    public function gudanglensaleinz_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_lensa_leinz',$nama_file);
    
        // import data
        Excel::import(new LensaLeinzImport, public_path('/file_lensa_leinz/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/lensa/leinz');
    }

    public function gudangsoftlensidolblack_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_idol_black',$nama_file);
    
        // import data
        Excel::import(new IdolBlackImport, public_path('/file_idol_black/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/idolblack');
    }

    public function gudangsoftlensidolbrown_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_idol_brown',$nama_file);
    
        // import data
        Excel::import(new IdolBrownImport, public_path('/file_idol_brown/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/idolbrown');
    }

    public function gudangsoftlensidolgrey_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_idol_grey',$nama_file);
    
        // import data
        Excel::import(new IdolGreyImport, public_path('/file_idol_grey/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/idolgrey');
    }

    public function gudangsoftlenscelebrityblack_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_celebrity_black',$nama_file);
    
        // import data
        Excel::import(new CelebrityBlackImport, public_path('/file_celebrity_black/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/celebrityblack');
    }

    public function gudangsoftlenscelebritybrown_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_celebrity_brown',$nama_file);
    
        // import data
        Excel::import(new CelebrityBrownImport, public_path('/file_celebrity_brown/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/celebritybrown');
    }

    public function gudangsoftlenscelebritygrey_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_celebrity_grey',$nama_file);
    
        // import data
        Excel::import(new CelebrityGreyImport, public_path('/file_celebrity_grey/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/gudang/softlens/celebritygrey');
    }

    public function gudangframebpjs_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_frame_bpjs',$nama_file);
    
        // import data
        Excel::import(new FrameBpjsImport, public_path('/file_frame_bpjs/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/super/framebpjs');
    }

    public function gudangframeumum_import_excel(Request $request) 
	{
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
    
        // menangkap file excel
        $file = $request->file('file');
    
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
    
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_frame_umum',$nama_file);
    
        // import data
        Excel::import(new FrameumumImport, public_path('/file_frame_umum/'.$nama_file));
    
        // notifikasi dengan session
        // Session::flash('sukses','Data donatur Berhasil Diimport!');
    
        // alihkan halaman kembali
        return redirect('/super/frameumum');
    }

// Export Excel
    // gudang

        public function gudanglensamccr_export_excel()
        {
            return (new LensaMccrExport)->download('LensaMccr.xlsx');
        }

        public function gudanglensamccrkaca_export_excel()
        {
            return (new LensaMccrKacaExport)->download('LensaMccrKaca.xlsx');
        }

        public function gudanglensablock_export_excel()
        {
            return (new LensaBlockExport)->download('LensaBlock.xlsx');
        }

        public function gudanglensaflexi_export_excel()
        {
            return (new LensaFlexiExport)->download('LensaFlexi.xlsx');
        }

        public function gudanglensagrey_export_excel()
        {
            return (new LensaGreyExport)->download('LensaGrey.xlsx');
        }

        public function gudanglensakmccr_export_excel()
        {
            return (new LensaKmccrExport)->download('LensaKmccr.xlsx');
        }

        public function gudanglensakmccrkaca_export_excel()
        {
            return (new LensaKmccrKacaExport)->download('LensaKmccrKaca.xlsx');
        }

        public function gudanglensaleinz_export_excel()
        {
            return (new LensaLeinzExport)->download('LensaLeinz.xlsx');
        }

        public function gudangsoftlenscelebrityblack_export_excel()
        {
            return (new CelebrityBlackExport)->download('SoftlensCelebrityBlack.xlsx');
        }

        public function gudangsoftlenscelebritybrown_export_excel()
        {
            return (new CelebrityBrownExport)->download('SoftlensCelebrityBrown.xlsx');
        }

        public function gudangsoftlenscelebritygrey_export_excel()
        {
            return (new CelebrityGreyExport)->download('SoftlensCelebrityGrey.xlsx');
        }

        public function gudangsoftlensidolblack_export_excel()
        {
            return (new IdolBlackExport)->download('SoftlensIdolBlack.xlsx');
        }

        public function gudangsoftlensidolbrown_export_excel()
        {
            return (new IdolBrownExport)->download('SoftlensIdolBrown.xlsx');
        }

        public function gudangsoftlensidolgrey_export_excel()
        {
            return (new IdolGreyExport)->download('SoftlensIdolGrey.xlsx');
        }

        public function gudangsoftlenssolution_export_excel()
        {
            return (new SolutionExport)->download('SoftlensSolution.xlsx');
        }

        public function gudangframebpjs_export_excel()
        {
            return (new FrameBpjsExport)->download('FrameBpjs.xlsx');
        }
        
        public function gudangframeumum_export_excel()
        {
            return (new FrameUmumExport)->download('FrameUmum.xlsx');
        }

        public function gudangframe_export_excel()
        {
            return (new FrameExport)->download('Frame.xlsx');
        }

        public function gudangframeoriginal_export_excel()
        {
            return (new FrameOriginalExport)->download('FrameOriginal.xlsx');
        }

    // Keluar
        public function keluarlensamccr_export_excel()
        {
            return (new LensaMccrKeluarExport)->download('LensaMccrKeluar.xlsx');
        }

        public function keluarlensamccrkaca_export_excel()
        {
            return (new LensaMccrKacaKeluarExport)->download('LensaMccrKacaKeluar.xlsx');
        }

        public function keluarlensablock_export_excel()
        {
            return (new LensaBlockKeluarExport)->download('LensaBlockKeluar.xlsx');
        }

        public function keluarlensaflexi_export_excel()
        {
            return (new LensaFlexiKeluarExport)->download('LensaFlexiKeluar.xlsx');
        }

        public function keluarlensagrey_export_excel()
        {
            return (new LensaGreyKeluarExport)->download('LensaGreyKeluar.xlsx');
        }

        public function keluarlensakmccr_export_excel()
        {
            return (new LensaKmccrKeluarExport)->download('LensaKmccrKeluar.xlsx');
        }

        public function keluarlensakmccrkaca_export_excel()
        {
            return (new LensaKmccrKacaKeluarExport)->download('LensaKmccrKacaKeluar.xlsx');
        }

        public function keluarlensaleinz_export_excel()
        {
            return (new LensaLeinzKeluarExport)->download('LensaLeinzKeluar.xlsx');
        }

        public function keluarsoftlenscelebrityblack_export_excel()
        {
            return (new CelebrityBlackKeluarExport)->download('SoftlensCelebrityBlackKeluar.xlsx');
        }

        public function keluarsoftlenscelebritybrown_export_excel()
        {
            return (new CelebrityBrownKeluarExport)->download('SoftlensCelebrityBrownKeluar.xlsx');
        }

        public function keluarsoftlenscelebritygrey_export_excel()
        {
            return (new CelebrityGreyKeluarExport)->download('SoftlensCelebrityGreyKeluar.xlsx');
        }

        public function keluarsoftlensidolblack_export_excel()
        {
            return (new IdolBlackKeluarExport)->download('SoftlensIdolBlackKeluar.xlsx');
        }

        public function keluarsoftlensidolbrown_export_excel()
        {
            return (new IdolBrownKeluarExport)->download('SoftlensIdolBrownKeluar.xlsx');
        }

        public function keluarsoftlensidolgrey_export_excel()
        {
            return (new IdolGreyKeluarExport)->download('SoftlensIdolGreyKeluar.xlsx');
        }

        public function keluarsoftlenssolution_export_excel()
        {
            return (new SolutionKeluarExport)->download('SoftlensSolutionKeluar.xlsx');
        }
        
        public function keluarframebpjs_export_excel()
        {
            return (new BpjsKeluarExport)->download('FrameBpjsKeluar.xlsx');
        }
        
        public function keluarframeumum_export_excel()
        {
            return (new UmumKeluarExport)->download('FrameUmumKeluar.xlsx');
        }

        public function keluarframe_export_excel()
        {
            return (new FrameKeluarExport)->download('FrameKeluar.xlsx');
        }

        public function keluarframeoriginal_export_excel()
        {
            return (new FrameOriginalKeluarExport)->download('FrameOriginalKeluar.xlsx');
        }
    // Masuk
        public function masuklensamccr_export_excel()
        {
            return (new LensaMccrMasukExport)->download('LensaMccrMasuk.xlsx');
        }

        public function masuklensamccrkaca_export_excel()
        {
            return (new LensaMccrKacaMasukExport)->download('LensaMccrKacaMasuk.xlsx');
        }

        public function masuklensablock_export_excel()
        {
            return (new LensaBlockMasukExport)->download('LensaBlockMasuk.xlsx');
        }

        public function masuklensaflexi_export_excel()
        {
            return (new LensaFlexiMasukExport)->download('LensaFlexiMasuk.xlsx');
        }

        public function masuklensagrey_export_excel()
        {
            return (new LensaGreyMasukExport)->download('LensaGreyMasuk.xlsx');
        }

        public function masuklensakmccr_export_excel()
        {
            return (new LensaKmccrMasukExport)->download('LensaKmcrrMasuk.xlsx');
        }

        public function masuklensakmccrkaca_export_excel()
        {
            return (new LensaKmccrKacaMasukExport)->download('LensaKmccrKacaMasuk.xlsx');
        }

        public function masuklensaleinz_export_excel()
        {
            return (new LensaLeinzMasukExport)->download('LensaLeinzMasuk.xlsx');
        }

        public function masuksoftlenscelebrityblack_export_excel()
        {
            return (new CelebrityBlackMasukExport)->download('SoftlensCelebrityBlackMasuk.xlsx');
        }

        public function masuksoftlenscelebritybrown_export_excel()
        {
            return (new CelebrityBrownMasukExport)->download('SoftlensCelebrityBrownMasuk.xlsx');
        }

        public function masuksoftlenscelebritygrey_export_excel()
        {
            return (new CelebrityGreyMasukExport)->download('SoftlensCelebrityGreyMasuk.xlsx');
        }

        public function masuksoftlensidolblack_export_excel()
        {
            return (new IdolBlackMasukExport)->download('SoftlensIdolBlackMasuk.xlsx');
        }

        public function masuksoftlensidolbrown_export_excel()
        {
            return (new IdolBrownMasukExport)->download('SoftlensIdolBrownMasuk.xlsx');
        }

        public function masuksoftlensidolgrey_export_excel()
        {
            return (new IdolGreyMasukExport)->download('SoftlensIdolGreyMasuk.xlsx');
        }

        public function masuksoftlenssolution_export_excel()
        {
            return (new SolutionMasukExport)->download('SoftlensSolutionMasuk.xlsx');
        }

        public function masukframebpjs_export_excel()
        {
            return (new BpjsMasukExport)->download('FrameBpjsMasuk.xlsx');
        }
        
        public function masukframeumum_export_excel()
        {
            return (new UmumMasukExport)->download('FrameUmumMasuk.xlsx');
        }

        public function tiara_export_excel()
        {
            return (new TiaraExport)->download('Tiara.xlsx');
        }

        public function emeral_export_excel()
        {
            return (new EmeralExport)->download('Emeral.xlsx');
        }

}
