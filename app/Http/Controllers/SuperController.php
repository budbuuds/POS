<?php

namespace App\Http\Controllers;

use App\User;
use App\solution;
use App\laporan;
use App\emeral;
use App\tiara;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\lensa_block;
use App\lensa_block_masuk;
use App\lensa_block_keluar;
use App\lensa_mccr;
use App\lensa_mccr_masuk;
use App\lensa_mccr_keluar;
use App\lensa_mccrkaca;
use App\lensa_mccrkaca_masuk;
use App\lensa_mccrkaca_keluar;
use App\lensa_flexi;
use App\lensa_flexi_masuk;
use App\lensa_flexi_keluar;
use App\lensa_grey;
use App\lensa_grey_masuk;
use App\lensa_grey_keluar;
use App\lensa_kmccr;
use App\lensa_kmccr_masuk;
use App\lensa_kmccr_keluar;
use App\lensa_kmccrkaca;
use App\lensa_kmccrkaca_masuk;
use App\lensa_kmccrkaca_keluar;
use App\lensa_leinz;
use App\lensa_leinz_masuk;
use App\lensa_leinz_keluar;
use App\celebrity_black;
use App\celebrity_black_masuk;
use App\celebrity_black_keluar;
use App\celebrity_brown;
use App\celebrity_brown_masuk;
use App\celebrity_brown_keluar;
use App\celebrity_grey;
use App\celebrity_grey_masuk;
use App\celebrity_grey_keluar;
use App\idol_black;
use App\idol_black_masuk;
use App\idol_black_keluar;
use App\idol_brown;
use App\idol_brown_masuk;
use App\idol_brown_keluar;
use App\idol_grey;
use App\idol_grey_masuk;
use App\idol_grey_keluar;
use App\solution_masuk;
use App\solution_keluar;
use App\framebpjs;
use App\frameumum;
use App\frame;
use App\frameoriginal;
use App\frame_keluar;
use App\frameoriginal_keluar;

use App\Imports\LensaMccrImport;
use App\Imports\LensaFlexiImport;
use App\Imports\LensaBlockImport;
use App\Imports\LensaGreyImport;
use App\Imports\LensaKmccrImport;
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
use App\Exports\LensaFlexiExport;
use App\Exports\LensaBlockExport;
use App\Exports\LensaGreyExport;
use App\Exports\LensaKmccrExport;
use App\Exports\LensaLeinzExport;
use App\Exports\CelebrityBlackExport;
use App\Exports\CelebrityBrownExport;
use App\Exports\CelebrityGreyExport;
use App\Exports\IdolBlackExport;
use App\Exports\IdolBrownExport;
use App\Exports\IdolGreyExport;
use App\Exports\FrameBpjsExport;
use App\Exports\FrameUmumExport;

use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SuperController extends Controller
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
        return view('super.home');
    }

// GUDANG

    public function gudanglensa()
    {
        return view('super.lensa_gudang');
    }

    public function gudangsoftlens()
    {
        return view('super.softlens_gudang');
    }

    public function gudangframe()
    {
        return view('super.frame_gudang');
    }

// MASUK
    
    public function lensamasuk()
    {
        return view('super.lensa_masuk');
    }

    public function softlensmasuk()
    {
        return view('super.softlens_masuk');
    }

// Frame
    public function framebpjs()
    {
        $data_framebpjs = \App\framebpjs::all();
        return view('super.framebpjs',['data_framebpjs' => $data_framebpjs]);
    }
    
    public function frameumum()
    {
        $data_frameumum = \App\frameumum::all();
        return view('super.frameumum',['data_frameumum' => $data_frameumum]);
    }

// KELUAR

    public function lensakeluar()
    {
        return view('super.lensa_keluar');
    }

    public function softlenskeluar()
    {
        return view('super.softlens_keluar');
    }

    public function framekeluar()
    {
        return view('super.frame_keluar');
    }


// Lensa MCCR

    public function gudanglensamccr(Request $request)
    {
        $data_lensa_mccr = \App\lensa_mccr::all();
        return view('super.lensa_mccr',['data_lensa_mccr' => $data_lensa_mccr]);
    }

    public function lensamasukmccr(Request $request)
    {
        $lensa_mccr_masuk = \App\lensa_mccr_masuk::all();
        return view('super.lensa_mccr_masuk',['lensa_mccr_masuk' => $lensa_mccr_masuk]);
    }

    public function create_mccr_masuk(Request $request)
    {    
        \App\lensa_mccr_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/mccr');
    }

    public function lensakeluarmccr(Request $request)
    {
        $lensa_mccr_keluar = \App\lensa_mccr_keluar::all();
        return view('super.lensa_mccr_keluar',['lensa_mccr_keluar' => $lensa_mccr_keluar]);
    }

    public function create_mccr_keluar(Request $request)
    {    
        \App\lensa_mccr_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/mccr');
    }

// Lensa block

    public function gudanglensablock(Request $request)
    {
        $data_lensa_block = \App\lensa_block::all();
        return view('super.lensa_block',['data_lensa_block' => $data_lensa_block]);
    }

    public function lensamasukblock(Request $request)
    {
        $lensa_block_masuk = \App\lensa_block_masuk::all();
        return view('super.lensa_block_masuk',['lensa_block_masuk' => $lensa_block_masuk]);
    }

    public function create_block_masuk(Request $request)
    {    
        \App\lensa_block_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/block');
    }

    public function lensakeluarblock(Request $request)
    {
        $lensa_block_keluar = \App\lensa_block_keluar::all();
        return view('super.lensa_block_keluar',['lensa_block_keluar' => $lensa_block_keluar]);
    }

    public function create_block_keluar(Request $request)
    {    
        \App\lensa_block_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/block');
    }

    // Lensa flexi

    public function gudanglensaflexi(Request $request)
    {
        $data_lensa_flexi = \App\lensa_flexi::all();
        return view('super.lensa_flexi',['data_lensa_flexi' => $data_lensa_flexi]);
    }

    public function lensamasukflexi(Request $request)
    {
        $lensa_flexi_masuk = \App\lensa_flexi_masuk::all();
        return view('super.lensa_flexi_masuk',['lensa_flexi_masuk' => $lensa_flexi_masuk]);
    }

    public function create_flexi_masuk(Request $request)
    {    
        \App\lensa_flexi_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/flexi');
    }

    public function lensakeluarflexi(Request $request)
    {
        $lensa_flexi_keluar = \App\lensa_flexi_keluar::all();
        return view('super.lensa_flexi_keluar',['lensa_flexi_keluar' => $lensa_flexi_keluar]);
    }

    public function create_flexi_keluar(Request $request)
    {    
        \App\lensa_flexi_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/flexi');
    }

// Lensa grey

    public function gudanglensagrey(Request $request)
    {
        $data_lensa_grey = \App\lensa_grey::all();
        return view('super.lensa_grey',['data_lensa_grey' => $data_lensa_grey]);
    }

    public function lensamasukgrey(Request $request)
    {
        $lensa_grey_masuk = \App\lensa_grey_masuk::all();
        return view('super.lensa_grey_masuk',['lensa_grey_masuk' => $lensa_grey_masuk]);
    }

    public function create_grey_masuk(Request $request)
    {    
        \App\lensa_grey_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/grey');
    }

    public function lensakeluargrey(Request $request)
    {
        $lensa_grey_keluar = \App\lensa_grey_keluar::all();
        return view('super.lensa_grey_keluar',['lensa_grey_keluar' => $lensa_grey_keluar]);
    }

    public function create_grey_keluar(Request $request)
    {    
        \App\lensa_grey_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/grey');
    }

// Lensa kmccr

    public function gudanglensakmccr(Request $request)
    {
        $data_lensa_kmccr = \App\lensa_kmccr::all();
        return view('super.lensa_kmccr',['data_lensa_kmccr' => $data_lensa_kmccr]);
    }

    public function lensamasukkmccr(Request $request)
    {
        $lensa_kmccr_masuk = \App\lensa_kmccr_masuk::all();
        return view('super.lensa_kmccr_masuk',['lensa_kmccr_masuk' => $lensa_kmccr_masuk]);
    }

    public function create_kmccr_masuk(Request $request)
    {    
        \App\lensa_kmccr_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/kmccr');
    }

    public function lensakeluarkmccr(Request $request)
    {
        $lensa_kmccr_keluar = \App\lensa_kmccr_keluar::all();
        return view('super.lensa_kmccr_keluar',['lensa_kmccr_keluar' => $lensa_kmccr_keluar]);
    }

    public function create_kmccr_keluar(Request $request)
    {    
        \App\lensa_kmccr_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/kmccr');
    }

// Lensa leinz

    public function gudanglensaleinz(Request $request)
    {
        $data_lensa_leinz = \App\lensa_leinz::all();
        return view('super.lensa_leinz',['data_lensa_leinz' => $data_lensa_leinz]);
    }

    public function lensamasukleinz(Request $request)
    {
        $lensa_leinz_masuk = \App\lensa_leinz_masuk::all();
        return view('super.lensa_leinz_masuk',['lensa_leinz_masuk' => $lensa_leinz_masuk]);
    }

    public function create_leinz_masuk(Request $request)
    {    
        \App\lensa_leinz_masuk::create($request->all());
        return redirect('/super/barangmasuk/lensa/leinz');
    }

    public function lensakeluarleinz(Request $request)
    {
        $lensa_leinz_keluar = \App\lensa_leinz_keluar::all();
        return view('super.lensa_leinz_keluar',['lensa_leinz_keluar' => $lensa_leinz_keluar]);
    }

    public function create_leinz_keluar(Request $request)
    {    
        \App\lensa_leinz_keluar::create($request->all());
        return redirect('/super/barangkeluar/lensa/leinz');
    }

    // Lensa kmccr kaca

    public function gudanglensakmccrkaca(Request $request)
    {
    $data_lensa_kmccrkaca = \App\lensa_kmccrkaca::all();
    return view('super.lensa_kmccrkaca',['data_lensa_kmccrkaca' => $data_lensa_kmccrkaca]);
    }

    public function lensamasukkmccrkaca(Request $request)
    {
    $lensa_kmccrkaca_masuk = \App\lensa_kmccrkaca_masuk::all();
    return view('super.lensa_kmccrkaca_masuk',['lensa_kmccrkaca_masuk' => $lensa_kmccrkaca_masuk]);
    }

    public function create_kmccrkaca_masuk(Request $request)
    {    
    \App\lensa_kmccrkaca_masuk::create($request->all());
    return redirect('/super/barangmasuk/lensa/kmccr/kaca');
    }

    public function lensakeluarkmccrkaca(Request $request)
    {
    $lensa_kmccrkaca_keluar = \App\lensa_kmccrkaca_keluar::all();
    return view('super.lensa_kmccrkaca_keluar',['lensa_kmccrkaca_keluar' => $lensa_kmccrkaca_keluar]);
    }

    public function create_kmccrkaca_keluar(Request $request)
    {    
    \App\lensa_kmccrkaca_keluar::create($request->all());
    return redirect('/super/barangkeluar/lensa/kmccr/kaca');
    }

// Lensa MCCR kaca

    public function gudanglensamccrkaca(Request $request)
    {
    $data_lensa_mccrkaca = \App\lensa_mccrkaca::all();
    return view('super.lensa_mccrkaca',['data_lensa_mccrkaca' => $data_lensa_mccrkaca]);
    }

    public function lensamasukmccrkaca(Request $request)
    {
    $lensa_mccrkaca_masuk = \App\lensa_mccrkaca_masuk::all();
    return view('super.lensa_mccrkaca_masuk',['lensa_mccrkaca_masuk' => $lensa_mccrkaca_masuk]);
    }

    public function create_mccrkaca_masuk(Request $request)
    {    
    \App\lensa_mccrkaca_masuk::create($request->all());
    return redirect('/super/barangmasuk/lensa/mccr/kaca');
    }

    public function lensakeluarmccrkaca(Request $request)
    {
    $lensa_mccrkaca_keluar = \App\lensa_mccrkaca_keluar::all();
    return view('super.lensa_mccrkaca_keluar',['lensa_mccrkaca_keluar' => $lensa_mccrkaca_keluar]);
    }

    public function create_mccrkaca_keluar(Request $request)
    {    
    \App\lensa_mccrkaca_keluar::create($request->all());
    return redirect('/super/barangkeluar/lensa/mccr/kaca');
    }


// Idol Black

    public function gudangsoftlensidolblack(Request $request)
    {
        $data_idol_black = \App\idol_black::all();
        return view('super.idol_black',['data_idol_black' => $data_idol_black]);
    }

    public function softlensmasukidolblack(Request $request)
    {
        $idol_black_masuk = \App\idol_black_masuk::all();
        return view('super.idol_black_masuk',['idol_black_masuk' => $idol_black_masuk]);
    }

    public function create_idolblack_masuk(Request $request)
    {    
        \App\idol_black_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/idolblack');
    }

    public function softlenskeluaridolblack(Request $request)
    {
        $idol_black_keluar = \App\idol_black_keluar::all();
        return view('super.idol_black_keluar',['idol_black_keluar' => $idol_black_keluar]);
    }

    public function create_idolblack_keluar(Request $request)
    {    
        \App\idol_black_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/idolblack');
    }

// Idol grey

    public function gudangsoftlensidolgrey(Request $request)
    {
        $data_idol_grey = \App\idol_grey::all();
        return view('super.idol_grey',['data_idol_grey' => $data_idol_grey]);
    }

    public function softlensmasukidolgrey(Request $request)
    {
        $idol_grey_masuk = \App\idol_grey_masuk::all();
        return view('super.idol_grey_masuk',['idol_grey_masuk' => $idol_grey_masuk]);
    }

    public function create_idolgrey_masuk(Request $request)
    {    
        \App\idol_grey_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/idolgrey');
    }

    public function softlenskeluaridolgrey(Request $request)
    {
        $idol_grey_keluar = \App\idol_grey_keluar::all();
        return view('super.idol_grey_keluar',['idol_grey_keluar' => $idol_grey_keluar]);
    }

    public function create_idolgrey_keluar(Request $request)
    {    
        \App\idol_grey_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/idolgrey');
    }

// Idol brown

    public function gudangsoftlensidolbrown(Request $request)
    {
        $data_idol_brown = \App\idol_brown::all();
        return view('super.idol_brown',['data_idol_brown' => $data_idol_brown]);
    }

    public function softlensmasukidolbrown(Request $request)
    {
        $idol_brown_masuk = \App\idol_brown_masuk::all();
        return view('super.idol_brown_masuk',['idol_brown_masuk' => $idol_brown_masuk]);
    }

    public function create_idolbrown_masuk(Request $request)
    {    
        \App\idol_brown_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/idolbrown');
    }

    public function softlenskeluaridolbrown(Request $request)
    {
        $idol_brown_keluar = \App\idol_brown_keluar::all();
        return view('super.idol_brown_keluar',['idol_brown_keluar' => $idol_brown_keluar]);
    }

    public function create_idolbrown_keluar(Request $request)
    {    
        \App\idol_brown_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/idolbrown');
    }

// Celebrity Black

    public function gudangsoftlenscelebrityblack(Request $request)
    {
        $data_celebrity_black = \App\celebrity_black::all();
        return view('super.celebrity_black',['data_celebrity_black' => $data_celebrity_black]);
    }

    public function softlensmasukcelebrityblack(Request $request)
    {
        $celebrity_black_masuk = \App\celebrity_black_masuk::all();
        return view('super.celebrity_black_masuk',['celebrity_black_masuk' => $celebrity_black_masuk]);
    }

    public function create_celebrityblack_masuk(Request $request)
    {    
        \App\celebrity_black_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/celebrityblack');
    }

    public function softlenskeluarcelebrityblack(Request $request)
    {
        $celebrity_black_keluar = \App\celebrity_black_keluar::all();
        return view('super.celebrity_black_keluar',['celebrity_black_keluar' => $celebrity_black_keluar]);
    }

    public function create_celebrityblack_keluar(Request $request)
    {    
        \App\celebrity_black_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/celebrityblack');
    }

// Celebrity grey

    public function gudangsoftlenscelebritygrey(Request $request)
    {
        $data_celebrity_grey = \App\celebrity_grey::all();
        return view('super.celebrity_grey',['data_celebrity_grey' => $data_celebrity_grey]);
    }

    public function softlensmasukcelebritygrey(Request $request)
    {
        $celebrity_grey_masuk = \App\celebrity_grey_masuk::all();
        return view('super.celebrity_grey_masuk',['celebrity_grey_masuk' => $celebrity_grey_masuk]);
    }

    public function create_celebritygrey_masuk(Request $request)
    {    
        \App\celebrity_grey_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/celebritygrey');
    }

    public function softlenskeluarcelebritygrey(Request $request)
    {
        $celebrity_grey_keluar = \App\celebrity_grey_keluar::all();
        return view('super.celebrity_grey_keluar',['celebrity_grey_keluar' => $celebrity_grey_keluar]);
    }

    public function create_celebritygrey_keluar(Request $request)
    {    
        \App\celebrity_grey_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/celebritygrey');
    }

// Celebrity brown

    public function gudangsoftlenscelebritybrown(Request $request)
    {
        $data_celebrity_brown = \App\celebrity_brown::all();
        return view('super.celebrity_brown',['data_celebrity_brown' => $data_celebrity_brown]);
    }

    public function softlensmasukcelebritybrown(Request $request)
    {
        $celebrity_brown_masuk = \App\celebrity_brown_masuk::all();
        return view('super.celebrity_brown_masuk',['celebrity_brown_masuk' => $celebrity_brown_masuk]);
    }

    public function create_celebritybrown_masuk(Request $request)
    {    
        \App\celebrity_brown_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/celebritybrown');
    }

    public function softlenskeluarcelebritybrown(Request $request)
    {
        $celebrity_brown_keluar = \App\celebrity_brown_keluar::all();
        return view('super.celebrity_brown_keluar',['celebrity_brown_keluar' => $celebrity_brown_keluar]);
    }

    public function create_celebritybrown_keluar(Request $request)
    {    
        \App\celebrity_brown_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/celebritybrown');
    }

// solution

    public function gudangsoftlenssolution(Request $request)
    {
        $data_solution = \App\solution::all();
        return view('super.solution',['data_solution' => $data_solution]);
    }

    public function softlensmasuksolution(Request $request)
    {
        $solution_masuk = \App\solution_masuk::all();
        return view('super.solution_masuk',['solution_masuk' => $solution_masuk]);
    }

    public function create_solution_masuk(Request $request)
    {    
        \App\solution_masuk::create($request->all());
        return redirect('/super/barangmasuk/softlens/solution');
    }

    public function softlenskeluarsolution(Request $request)
    {
        $solution_keluar = \App\solution_keluar::all();
        return view('super.solution_keluar',['solution_keluar' => $solution_keluar]);
    }

    public function create_solution_keluar(Request $request)
    {    
        \App\solution_keluar::create($request->all());
        return redirect('/super/barangkeluar/softlens/solution');
    }

// Frame bpjs

    public function gudangframebpjs(Request $request)
    {
        $data_bpjs = \App\bpjs::all();
        return view('super.bpjs',['data_bpjs' => $data_bpjs]);
    }

    public function framemasukbpjs(Request $request)
    {
        $bpjs_masuk = \App\bpjs_masuk::all();
        return view('super.bpjs_masuk',['bpjs_masuk' => $bpjs_masuk]);
    }

    public function create_bpjs_masuk(Request $request)
    {    
        \App\bpjs_masuk::create($request->all());
        return redirect('/barangmasuk/frame/bpjs');
    }

    public function create_bpjs(Request $request)
    {    
        \App\framebpjs::create($request->all());
        return redirect('/super/framebpjs');
    }

    public function create_umum(Request $request)
    {    
        \App\frameumum::create($request->all());
        return redirect('/super/frameumum');
    }

    public function framekeluarbpjs(Request $request)
    {
        $bpjs_keluar = \App\bpjs_keluar::all();
        return view('super.bpjs_keluar',['bpjs_keluar' => $bpjs_keluar]);
    }

    public function create_bpjs_keluar(Request $request)
    {    
        \App\bpjs_keluar::create($request->all());
        return redirect('/barangkeluar/frame/bpjs');
    }

// Frame umum

    public function gudangframeumum(Request $request)
    {
        $data_frameumum = \App\frameumum::all();
        return view('super.frameumum',['data_frameumum' => $data_frameumum]);
    }

    public function framemasukframeumum(Request $request)
    {
        $frameumum_masuk = \App\frameumum_masuk::all();
        return view('super.frameumum_masuk',['frameumum_masuk' => $frameumum_masuk]);
    }

    public function create_frameumum_masuk(Request $request)
    {    
        \App\frameumum_masuk::create($request->all());
        return redirect('/barangmasuk/frame/frameumum');
    }

    public function framekeluarframeumum(Request $request)
    {
        $frameumum_keluar = \App\frameumum_keluar::all();
        return view('super.frameumum_keluar',['frameumum_keluar' => $frameumum_keluar]);
    }

    public function create_frameumum_keluar(Request $request)
    {    
        \App\frameumum_keluar::create($request->all());
        return redirect('/barangkeluar/frame/umum');
    }


// Laporan

    public function laporan(Request $request)
    {
        $data_laporan = \App\laporan::all();
        return view('super.laporan',['data_laporan' => $data_laporan]);
    }

    public function create_laporan(Request $request)
    {    
        $laporan = \App\laporan::create($request->all());
        if($request->hasFile('invoice')){
            $request->file('invoice')->move('images/',$request->file('invoice')->getClientOriginalName());
            $laporan->invoice = $request->file('invoice')->getClientOriginalName();
            $laporan->save();
        }
        return redirect('/super/laporan');
    }
    
// Export PDF
    public function laporan_cetak_pdf(Request $request)
        {
            set_time_limit(300);
            $data_laporan = \App\laporan::all();
    
            $pdf = PDF::loadview('super.laporan_pdf',['data_laporan'=>$data_laporan]);
            return $pdf->stream();

        }

// Toko
    public function emeral(Request $request)
    {
        $emeral = \App\emeral::all();
        return view('super.emeral',['emeral' => $emeral]);
    }

    public function create_emeral(Request $request)
    {    
        \App\emeral::create($request->all());
        return redirect('/super/emeral');
    }
    
    public function tiara(Request $request)
    {
        $tiara = \App\tiara::all();
        return view('super.tiara',['tiara' => $tiara]);
    }

    public function create_tiara(Request $request)
    {    
        \App\tiara::create($request->all());
        return redirect('/super/tiara');
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
        return redirect('/super/gudang/lensa/mccr');
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
        return redirect('/super/gudang/lensa/block');
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
        return redirect('/super/gudang/lensa/flexi');
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
        return redirect('/super/gudang/lensa/grey');
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
        return redirect('/super/gudang/lensa/kmccr');
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
        return redirect('/super/gudang/lensa/leinz');
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
        return redirect('/super/gudang/softlens/idolblack');
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
        return redirect('/super/gudang/softlens/idolbrown');
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
        return redirect('/super/gudang/softlens/idolgrey');
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
        return redirect('/super/gudang/softlens/celebrityblack');
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
        return redirect('/super/gudang/softlens/celebritybrown');
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
        return redirect('/super/gudang/softlens/celebritygrey');
    }

    public function gudangframeframebpjs_import_excel(Request $request) 
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
        return redirect('/gudang/frame/framebpjs');
    }

    public function gudangframeframeumum_import_excel(Request $request) 
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
        return redirect('/gudang/frame/frameumum');
    }


// Export Excel
    public function gudangsoftlenscelebrityblack_export_excel()
    {
        return (new CelebrityBlackExport)->download('SoftlensCelebrityBlack.xlsx');
    }

// Super CRUD

    public function editlensablock($id)
    {
        $data = \App\lensa_block::find($id);
        return view('super.editlensablock',['data' => $data]);
    }

    public function updatelensablock(Request $request,$id)
    {
        $data = \App\lensa_block::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/block')->with('sukses');
    }

    public function deletelensablock($id)
    {
        $data = lensa_block::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/block')->with('hapus');
    }

    public function editlensablockmasuk($id)
    {
        $masuk = \App\lensa_block_masuk::find($id);
        return view('super.editlensablockmasuk',['masuk' => $masuk]);
    }

    public function updatelensablockmasuk(Request $request,$id)
    {
        $masuk = \App\lensa_block_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/block')->with('sukses');
    }

    public function deletelensablockmasuk($id)
    {
        $masuk = lensa_block_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/block')->with('hapus');
    }

    public function editlensablockkeluar($id)
    {
        $keluar = \App\lensa_block_keluar::find($id);
        return view('super.editlensablockkeluar',['keluar' => $keluar]);
    }

    public function updatelensablockkeluar(Request $request,$id)
    {
        $keluar = \App\lensa_block_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/block')->with('sukses');
    }

    public function deletelensablockkeluar($id)
    {
        $keluar = lensa_block_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/block')->with('hapus');
    }

    public function editlensamccr($id)
    {
        $data = \App\lensa_mccr::find($id);
        return view('super.editlensamccr',['data' => $data]);
    }

    public function updatelensamccr(Request $request,$id)
    {
        $data = \App\lensa_mccr::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/mccr')->with('sukses');
    }

    public function deletelensamccr($id)
    {
        $data = lensa_mccr::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/mccr')->with('hapus');
    }

    public function editlensamccrmasuk($id)
    {
        $masuk = \App\lensa_mccr_masuk::find($id);
        return view('super.editlensamccrmasuk',['masuk' => $masuk]);
    }

    public function updatelensamccrmasuk(Request $request,$id)
    {
        $masuk = \App\lensa_mccr_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/mccr')->with('sukses');
    }

    public function deletelensamccrmasuk($id)
    {
        $masuk = lensa_mccr_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/mccr')->with('hapus');
    }

    public function editlensamccrkeluar($id)
    {
        $keluar = \App\lensa_mccr_keluar::find($id);
        return view('super.editlensamccrkeluar',['keluar' => $keluar]);
    }

    public function updatelensamccrkeluar(Request $request,$id)
    {
        $keluar = \App\lensa_mccr_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/mccr')->with('sukses');
    }

    public function deletelensamccrkeluar($id)
    {
        $keluar = lensa_mccr_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/mccr')->with('hapus');
    }

    public function editlensamccrkaca($id)
    {
        $data = \App\lensa_mccrkaca::find($id);
        return view('super.editlensamccrkaca',['data' => $data]);
    }

    public function updatelensamccrkaca(Request $request,$id)
    {
        $data = \App\lensa_mccrkaca::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/mccr/kaca')->with('sukses');
    }

    public function deletelensamccrkaca($id)
    {
        $data = lensa_mccrkaca::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/mccr/kaca')->with('hapus');
    }

    public function editlensamccrkacamasuk($id)
    {
        $masuk = \App\lensa_mccrkaca_masuk::find($id);
        return view('super.editlensamccrkacamasuk',['masuk' => $masuk]);
    }

    public function updatelensamccrkacamasuk(Request $request,$id)
    {
        $masuk = \App\lensa_mccrkaca_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/mccr/kaca')->with('sukses');
    }

    public function deletelensamccrkacamasuk($id)
    {
        $masuk = lensa_mccrkaca_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/mccr/kaca')->with('hapus');
    }

    public function editlensamccrkacakeluar($id)
    {
        $keluar = \App\lensa_mccrkaca_keluar::find($id);
        return view('super.editlensamccrkacakeluar',['keluar' => $keluar]);
    }

    public function updatelensamccrkacakeluar(Request $request,$id)
    {
        $keluar = \App\lensa_mccrkaca_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/mccr/kaca')->with('sukses');
    }

    public function deletelensamccrkacakeluar($id)
    {
        $keluar = lensa_mccrkaca_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/mccr/kaca')->with('hapus');
    }

    public function editlensaflexi($id)
    {
        $data = \App\lensa_flexi::find($id);
        return view('super.editlensaflexi',['data' => $data]);
    }

    public function updatelensaflexi(Request $request,$id)
    {
        $data = \App\lensa_flexi::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/flexi')->with('sukses');
    }

    public function deletelensaflexi($id)
    {
        $data = lensa_flexi::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/flexi')->with('hapus');
    }

    public function editlensafleximasuk($id)
    {
        $masuk = \App\lensa_flexi_masuk::find($id);
        return view('super.editlensafleximasuk',['masuk' => $masuk]);
    }

    public function updatelensafleximasuk(Request $request,$id)
    {
        $masuk = \App\lensa_flexi_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/flexi')->with('sukses');
    }

    public function deletelensafleximasuk($id)
    {
        $masuk = lensa_flexi_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/flexi')->with('hapus');
    }

    public function editlensaflexikeluar($id)
    {
        $keluar = \App\lensa_flexi_keluar::find($id);
        return view('super.editlensaflexikeluar',['keluar' => $keluar]);
    }

    public function updatelensaflexikeluar(Request $request,$id)
    {
        $keluar = \App\lensa_flexi_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/flexi')->with('sukses');
    }

    public function deletelensaflexikeluar($id)
    {
        $keluar = lensa_flexi_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/flexi')->with('hapus');
    }

    public function editlensagrey($id)
    {
        $data = \App\lensa_grey::find($id);
        return view('super.editlensagrey',['data' => $data]);
    }

    public function updatelensagrey(Request $request,$id)
    {
        $data = \App\lensa_grey::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/grey')->with('sukses');
    }

    public function deletelensagrey($id)
    {
        $data = lensa_grey::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/grey')->with('hapus');
    }

    public function editlensagreymasuk($id)
    {
        $masuk = \App\lensa_grey_masuk::find($id);
        return view('super.editlensagreymasuk',['masuk' => $masuk]);
    }

    public function updatelensagreymasuk(Request $request,$id)
    {
        $masuk = \App\lensa_grey_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/grey')->with('sukses');
    }

    public function deletelensagreymasuk($id)
    {
        $masuk = lensa_grey_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/grey')->with('hapus');
    }

    public function editlensagreykeluar($id)
    {
        $keluar = \App\lensa_grey_keluar::find($id);
        return view('super.editlensagreykeluar',['keluar' => $keluar]);
    }

    public function updatelensagreykeluar(Request $request,$id)
    {
        $keluar = \App\lensa_grey_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/grey')->with('sukses');
    }

    public function deletelensagreykeluar($id)
    {
        $keluar = lensa_grey_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/grey')->with('hapus');
    }

    public function editlensakmccr($id)
    {
        $data = \App\lensa_kmccr::find($id);
        return view('super.editlensakmccr',['data' => $data]);
    }

    public function updatelensakmccr(Request $request,$id)
    {
        $data = \App\lensa_kmccr::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/kmccr')->with('sukses');
    }

    public function deletelensakmccr($id)
    {
        $data = lensa_kmccr::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/kmccr')->with('hapus');
    }

    public function editlensakmccrmasuk($id)
    {
        $masuk = \App\lensa_kmccr_masuk::find($id);
        return view('super.editlensakmccrmasuk',['masuk' => $masuk]);
    }

    public function updatelensakmccrmasuk(Request $request,$id)
    {
        $masuk = \App\lensa_kmccr_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/kmccr')->with('sukses');
    }

    public function deletelensakmccrmasuk($id)
    {
        $masuk = lensa_kmccr_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/kmccr')->with('hapus');
    }

    public function editlensakmccrkeluar($id)
    {
        $keluar = \App\lensa_kmccr_keluar::find($id);
        return view('super.editlensakmccrkeluar',['keluar' => $keluar]);
    }

    public function updatelensakmccrkeluar(Request $request,$id)
    {
        $keluar = \App\lensa_kmccr_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/kmccr')->with('sukses');
    }

    public function deletelensakmccrkeluar($id)
    {
        $keluar = lensa_kmccr_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/kmccr')->with('hapus');
    }

    public function editlensakmccrkaca($id)
    {
        $data = \App\lensa_kmccrkaca::find($id);
        return view('super.editlensakmccrkaca',['data' => $data]);
    }

    public function updatelensakmccrkaca(Request $request,$id)
    {
        $data = \App\lensa_kmccrkaca::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/lensa/kmccr/kaca')->with('sukses');
    }

    public function deletelensakmccrkaca($id)
    {
        $data = lensa_kmccrkaca::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/lensa/kmccr/kaca')->with('hapus');
    }

    public function editlensakmccrkacamasuk($id)
    {
        $masuk = \App\lensa_kmccrkaca_masuk::find($id);
        return view('super.editlensakmccrkacamasuk',['masuk' => $masuk]);
    }

    public function updatelensakmccrkacamasuk(Request $request,$id)
    {
        $masuk = \App\lensa_kmccrkaca_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/lensa/kmccr/kaca')->with('sukses');
    }

    public function deletelensakmccrkacamasuk($id)
    {
        $masuk = lensa_kmccrkaca_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/lensa/kmccr/kaca')->with('hapus');
    }

    public function editlensakmccrkacakeluar($id)
    {
        $keluar = \App\lensa_kmccrkaca_keluar::find($id);
        return view('super.editlensakmccrkacakeluar',['keluar' => $keluar]);
    }

    public function updatelensakmccrkacakeluar(Request $request,$id)
    {
        $keluar = \App\lensa_kmccrkaca_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/lensa/kmccr/kaca')->with('sukses');
    }

    public function deletelensakmccrkacakeluar($id)
    {
        $keluar = lensa_kmccrkaca_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/lensa/kmccr/kaca')->with('hapus');
    }

    public function editcelebrityblack($id)
    {
        $data = \App\celebrity_black::find($id);
        return view('super.editcelebrityblack',['data' => $data]);
    }

    public function updatecelebrityblack(Request $request,$id)
    {
        $data = \App\celebrity_black::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/celebrityblack')->with('sukses');
    }

    public function deletecelebrityblack($id)
    {
        $data = celebrity_black::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/celebrityblack')->with('hapus');
    }

    public function editcelebrityblackmasuk($id)
    {
        $masuk = \App\celebrity_black_masuk::find($id);
        return view('super.editcelebrityblackmasuk',['masuk' => $masuk]);
    }

    public function updatecelebrityblackmasuk(Request $request,$id)
    {
        $masuk = \App\celebrity_black_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/celebrityblack')->with('sukses');
    }

    public function deletecelebrityblackmasuk($id)
    {
        $masuk = celebrity_black_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/celebrityblack')->with('hapus');
    }

    public function editcelebrityblackkeluar($id)
    {
        $keluar = \App\celebrity_black_keluar::find($id);
        return view('super.editcelebrityblackkeluar',['keluar' => $keluar]);
    }

    public function updatecelebrityblackkeluar(Request $request,$id)
    {
        $keluar = \App\celebrity_black_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/celebrityblack')->with('sukses');
    }

    public function deletecelebrityblackkeluar($id)
    {
        $keluar = celebrity_black_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/celebrityblack')->with('hapus');
    }

    public function editcelebritybrown($id)
    {
        $data = \App\celebrity_brown::find($id);
        return view('super.editcelebritybrown',['data' => $data]);
    }

    public function updatecelebritybrown(Request $request,$id)
    {
        $data = \App\celebrity_brown::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/celebritybrown')->with('sukses');
    }

    public function deletecelebritybrown($id)
    {
        $data = celebrity_brown::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/celebritybrown')->with('hapus');
    }

    public function editcelebritybrownmasuk($id)
    {
        $masuk = \App\celebrity_brown_masuk::find($id);
        return view('super.editcelebritybrownmasuk',['masuk' => $masuk]);
    }

    public function updatecelebritybrownmasuk(Request $request,$id)
    {
        $masuk = \App\celebrity_brown_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/celebritybrown')->with('sukses');
    }

    public function deletecelebritybrownmasuk($id)
    {
        $masuk = celebrity_brown_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/celebritybrown')->with('hapus');
    }

    public function editcelebritybrownkeluar($id)
    {
        $keluar = \App\celebrity_brown_keluar::find($id);
        return view('super.editcelebritybrownkeluar',['keluar' => $keluar]);
    }

    public function updatecelebritybrownkeluar(Request $request,$id)
    {
        $keluar = \App\celebrity_brown_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/celebritybrown')->with('sukses');
    }

    public function deletecelebritybrownkeluar($id)
    {
        $keluar = celebrity_brown_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/celebritybrown')->with('hapus');
    }

    public function editcelebritygrey($id)
    {
        $data = \App\celebrity_grey::find($id);
        return view('super.editcelebritygrey',['data' => $data]);
    }

    public function updatecelebritygrey(Request $request,$id)
    {
        $data = \App\celebrity_grey::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/celebritygrey')->with('sukses');
    }

    public function deletecelebritygrey($id)
    {
        $data = celebrity_grey::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/celebritygrey')->with('hapus');
    }

    public function editcelebritygreymasuk($id)
    {
        $masuk = \App\celebrity_grey_masuk::find($id);
        return view('super.editcelebritygreymasuk',['masuk' => $masuk]);
    }

    public function updatecelebritygreymasuk(Request $request,$id)
    {
        $masuk = \App\celebrity_grey_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/celebritygrey')->with('sukses');
    }

    public function deletecelebritygreymasuk($id)
    {
        $masuk = celebrity_grey_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/celebritygrey')->with('hapus');
    }

    public function editcelebritygreykeluar($id)
    {
        $keluar = \App\celebrity_grey_keluar::find($id);
        return view('super.editcelebritygreykeluar',['keluar' => $keluar]);
    }

    public function updatecelebritygreykeluar(Request $request,$id)
    {
        $keluar = \App\celebrity_grey_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/celebritygrey')->with('sukses');
    }

    public function deletecelebritygreykeluar($id)
    {
        $keluar = celebrity_grey_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/celebritygrey')->with('hapus');
    }

    public function editidolblack($id)
    {
        $data = \App\idol_black::find($id);
        return view('super.editidolblack',['data' => $data]);
    }

    public function updateidolblack(Request $request,$id)
    {
        $data = \App\idol_black::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/idolblack')->with('sukses');
    }

    public function deleteidolblack($id)
    {
        $data = idol_black::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/idolblack')->with('hapus');
    }

    public function editidolblackmasuk($id)
    {
        $masuk = \App\idol_black_masuk::find($id);
        return view('super.editidolblackmasuk',['masuk' => $masuk]);
    }

    public function updateidolblackmasuk(Request $request,$id)
    {
        $masuk = \App\idol_black_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/idolblack')->with('sukses');
    }

    public function deleteidolblackmasuk($id)
    {
        $masuk = idol_black_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/idolblack')->with('hapus');
    }

    public function editidolblackkeluar($id)
    {
        $keluar = \App\idol_black_keluar::find($id);
        return view('super.editidolblackkeluar',['keluar' => $keluar]);
    }

    public function updateidolblackkeluar(Request $request,$id)
    {
        $keluar = \App\idol_black_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/idolblack')->with('sukses');
    }

    public function deleteidolblackkeluar($id)
    {
        $keluar = idol_black_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/idolblack')->with('hapus');
    }

    public function editidolbrown($id)
    {
        $data = \App\idol_brown::find($id);
        return view('super.editidolbrown',['data' => $data]);
    }

    public function updateidolbrown(Request $request,$id)
    {
        $data = \App\idol_brown::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/idolbrown')->with('sukses');
    }

    public function deleteidolbrown($id)
    {
        $data = idol_brown::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/idolbrown')->with('hapus');
    }

    public function editidolbrownmasuk($id)
    {
        $masuk = \App\idol_brown_masuk::find($id);
        return view('super.editidolbrownmasuk',['masuk' => $masuk]);
    }

    public function updateidolbrownmasuk(Request $request,$id)
    {
        $masuk = \App\idol_brown_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/idolbrown')->with('sukses');
    }

    public function deleteidolbrownmasuk($id)
    {
        $masuk = idol_brown_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/idolbrown')->with('hapus');
    }

    public function editidolbrownkeluar($id)
    {
        $keluar = \App\idol_brown_keluar::find($id);
        return view('super.editidolbrownkeluar',['keluar' => $keluar]);
    }

    public function updateidolbrownkeluar(Request $request,$id)
    {
        $keluar = \App\idol_brown_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/idolbrown')->with('sukses');
    }

    public function deleteidolbrownkeluar($id)
    {
        $keluar = idol_brown_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/idolbrown')->with('hapus');
    }

    public function editidolgrey($id)
    {
        $data = \App\idol_grey::find($id);
        return view('super.editidolgrey',['data' => $data]);
    }

    public function updateidolgrey(Request $request,$id)
    {
        $data = \App\idol_grey::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/idolgrey')->with('sukses');
    }

    public function deleteidolgrey($id)
    {
        $data = idol_grey::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/idolgrey')->with('hapus');
    }

    public function editidolgreymasuk($id)
    {
        $masuk = \App\idol_grey_masuk::find($id);
        return view('super.editidolgreymasuk',['masuk' => $masuk]);
    }

    public function updateidolgreymasuk(Request $request,$id)
    {
        $masuk = \App\idol_grey_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/idolgrey')->with('sukses');
    }

    public function deleteidolgreymasuk($id)
    {
        $masuk = idol_grey_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/idolgrey')->with('hapus');
    }

    public function editidolgreykeluar($id)
    {
        $keluar = \App\idol_grey_keluar::find($id);
        return view('super.editidolgreykeluar',['keluar' => $keluar]);
    }

    public function updateidolgreykeluar(Request $request,$id)
    {
        $keluar = \App\idol_grey_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/idolgrey')->with('sukses');
    }

    public function deleteidolgreykeluar($id)
    {
        $keluar = idol_grey_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/idolgrey')->with('hapus');
    }

    public function editsolution($id)
    {
        $data = \App\solution::find($id);
        return view('super.editsolution',['data' => $data]);
    }

    public function updatesolution(Request $request,$id)
    {
        $data = \App\solution::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/softlens/solution')->with('sukses');
    }

    public function deletesolution($id)
    {
        $data = solution::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/softlens/solution')->with('hapus');
    }

    public function editsolutionmasuk($id)
    {
        $masuk = \App\solution_masuk::find($id);
        return view('super.editsolutionmasuk',['masuk' => $masuk]);
    }

    public function updatesolutionmasuk(Request $request,$id)
    {
        $masuk = \App\solution_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/softlens/solution')->with('sukses');
    }

    public function deletesolutionmasuk($id)
    {
        $masuk = solution_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/softlens/solution')->with('hapus');
    }

    public function editsolutionkeluar($id)
    {
        $keluar = \App\solution_keluar::find($id);
        return view('super.editsolutionkeluar',['keluar' => $keluar]);
    }

    public function updatesolutionkeluar(Request $request,$id)
    {
        $keluar = \App\solution_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/softlens/solution')->with('sukses');
    }

    public function deletesolutionkeluar($id)
    {
        $keluar = solution_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/softlens/solution')->with('hapus');
    }

    public function editlaporan($id)
    {
        $data = \App\laporan::find($id);
        return view('super.editlaporan',['data' => $data]);
    }

    public function updatelaporan(Request $request,$id)
    {
        $data = \App\laporan::find($id);
        $data->update($request->all());
        return redirect('/super/laporan')->with('sukses');
    }

    public function deletelaporan($id)
    {
        $data = laporan::FindOrFail($id);
        $data->delete();
        return redirect('/super/laporan')->with('hapus');
    }

    public function edittiara($id)
    {
        $data = \App\tiara::find($id);
        return view('super.edittiara',['data' => $data]);
    }

    public function updatetiara(Request $request,$id)
    {
        $data = \App\tiara::find($id);
        $data->update($request->all());
        return redirect('/super/tiara')->with('sukses');
    }

    public function deletetiara($id)
    {
        $data = tiara::FindOrFail($id);
        $data->delete();
        return redirect('/super/tiara')->with('hapus');
    }

    public function editemeral($id)
    {
        $data = \App\emeral::find($id);
        return view('super.editemeral',['data' => $data]);
    }

    public function updateemeral(Request $request,$id)
    {
        $data = \App\emeral::find($id);
        $data->update($request->all());
        return redirect('/super/emeral')->with('sukses');
    }

    public function deleteemeral($id)
    {
        $data = emeral::FindOrFail($id);
        $data->delete();
        return redirect('/super/emeral')->with('hapus');
    }

    public function editframebpjs($id)
    {
        $data = \App\framebpjs::find($id);
        return view('super.editframebpjs',['data' => $data]);
    }

    public function updateframebpjs(Request $request,$id)
    {
        $data = \App\framebpjs::find($id);
        $data->update($request->all());
        return redirect('/super/framebpjs')->with('sukses');
    }

    public function deleteframebpjs($id)
    {
        $data = framebpjs::FindOrFail($id);
        $data->delete();
        return redirect('/super/framebpjs')->with('hapus');
    }

    public function editframebpjsmasuk($id)
    {
        $masuk = \App\framebpjs_masuk::find($id);
        return view('super.editframebpjsmasuk',['masuk' => $masuk]);
    }

    public function updateframebpjsmasuk(Request $request,$id)
    {
        $masuk = \App\framebpjs_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/frame/bpjs')->with('sukses');
    }

    public function deleteframebpjsmasuk($id)
    {
        $masuk = framebpjs_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/frame/bpjs')->with('hapus');
    }

    public function editframebpjskeluar($id)
    {
        $keluar = \App\framebpjs_keluar::find($id);
        return view('super.editframebpjskeluar',['keluar' => $keluar]);
    }

    public function updateframebpjskeluar(Request $request,$id)
    {
        $keluar = \App\framebpjs_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/frame/bpjs')->with('sukses');
    }

    public function deleteframebpjskeluar($id)
    {
        $keluar = framebpjs_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/frame/bpjs')->with('hapus');
    }

    public function editframeumum($id)
    {
        $data = \App\frameumum::find($id);
        return view('super.editframeumum',['data' => $data]);
    }

    public function updateframeumum(Request $request,$id)
    {
        $data = \App\frameumum::find($id);
        $data->update($request->all());
        return redirect('/super/frameumum')->with('sukses');
    }

    public function deleteframeumum($id)
    {
        $data = frameumum::FindOrFail($id);
        $data->delete();
        return redirect('/super/frameumum')->with('hapus');
    }

    public function editframeumummasuk($id)
    {
        $masuk = \App\frameumum_masuk::find($id);
        return view('super.editframeumummasuk',['masuk' => $masuk]);
    }

    public function updateframeumummasuk(Request $request,$id)
    {
        $masuk = \App\frameumum_masuk::find($id);
        $masuk->update($request->all());
        return redirect('/super/barangmasuk/frame/umum')->with('sukses');
    }

    public function deleteframeumummasuk($id)
    {
        $masuk = frameumum_masuk::FindOrFail($id);
        $masuk->delete();
        return redirect('/super/barangmasuk/frame/umum')->with('hapus');
    }

    public function editframeumumkeluar($id)
    {
        $keluar = \App\frameumum_keluar::find($id);
        return view('super.editframeumumkeluar',['keluar' => $keluar]);
    }

    public function updateframeumumkeluar(Request $request,$id)
    {
        $keluar = \App\frameumum_keluar::find($id);
        $keluar->update($request->all());
        return redirect('/super/barangkeluar/frame/umum')->with('sukses');
    }

    public function deleteframeumumkeluar($id)
    {
        $keluar = frameumum_keluar::FindOrFail($id);
        $keluar->delete();
        return redirect('/super/barangkeluar/frame/umum')->with('hapus');
    }

    public function editframe($id)
    {
        $data = \App\frame::find($id);
        return view('super.editframe',['data' => $data]);
    }

    public function updateframe(Request $request,$id)
    {
        $data = \App\frame::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/framebiasa')->with('sukses');
    }

    public function deleteframe($id)
    {
        $data = frame::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/framebiasa')->with('hapus');
    }

    public function editframekeluar($id)
    {
        $data = \App\frame_keluar::find($id);
        return view('super.editframekeluar',['data' => $data]);
    }

    public function updateframekeluar(Request $request,$id)
    {
        $data = \App\frame_keluar::find($id);
        $data->update($request->all());
        return redirect('/super/barangkeluar/framebiasa')->with('sukses');
    }

    public function deleteframekeluar($id)
    {
        $data = frame_keluar::FindOrFail($id);
        $data->delete();
        return redirect('/super/barangkeluar/framebiasa')->with('hapus');
    }
    
// Frame Biasa

    public function gudang_frame(Request $request)
    {
        $data_frame = \App\frame::all();
        return view('super.frame',['data_frame' => $data_frame]);
    }

    public function create_frame_masuk(Request $request)
    {    
        \App\frame::create($request->all());
        return redirect('/super/gudang/framebiasa');
    }

    public function frame_keluar(Request $request)
    {
        $frame_keluar = \App\frame_keluar::all();
        return view('super.framekeluar',['frame_keluar' => $frame_keluar]);
    }

    public function create_frame_keluar(Request $request)
    {    
        \App\frame_keluar::create($request->all());
        return redirect('/super/barangkeluar/framebiasa');
    }

    public function editframe_keluar($id)
    {
        $data = \App\frame_keluar::find($id);
        return view('super.editframe_keluar',['data' => $data]);
    }

    public function updateframe_keluar(Request $request,$id)
    {
        $data = \App\frame_keluar::find($id);
        $data->update($request->all());
        return redirect('/super/barangkeluar/framebiasa')->with('sukses');
    }

    public function deleteframe_keluar($id)
    {
        $data = frame_keluar::FindOrFail($id);
        $data->delete();
        return redirect('/super/barangkeluar/framebiasa')->with('hapus');
    }

// Frame Original

    public function gudang_frameoriginal(Request $request)
    {
        $data_frameoriginal = \App\frameoriginal::all();
        return view('super.frameoriginal',['data_frameoriginal' => $data_frameoriginal]);
    }

    public function create_frameoriginal_masuk(Request $request)
    {    
        \App\frameoriginal::create($request->all());
        return redirect('/super/gudang/frameoriginal');
    }

    public function frameoriginal_keluar(Request $request)
    {
        $frameoriginal_keluar = \App\frameoriginal_keluar::all();
        return view('super.frameoriginal_keluar',['frameoriginal_keluar' => $frameoriginal_keluar]);
    }

    public function create_frameoriginal_keluar(Request $request)
    {    
        \App\frameoriginal_keluar::create($request->all());
        return redirect('/super/barangkeluar/frameoriginal');
    }

    public function editframeoriginal($id)
    {
        $data = \App\frameoriginal::find($id);
        return view('super.editframeoriginal',['data' => $data]);
    }

    public function updateframeoriginal(Request $request,$id)
    {
        $data = \App\frameoriginal::find($id);
        $data->update($request->all());
        return redirect('/super/gudang/frameoriginal')->with('sukses');
    }

    public function deleteframeoriginal($id)
    {
        $data = frameoriginal::FindOrFail($id);
        $data->delete();
        return redirect('/super/gudang/frameoriginal')->with('hapus');
    }

    public function editframeoriginalkeluar($id)
    {
        $data = \App\frameoriginal_keluar::find($id);
        return view('super.editframeoriginal_keluar',['data' => $data]);
    }

    public function updateframeoriginalkeluar(Request $request,$id)
    {
        $data = \App\frameoriginal_keluar::find($id);
        $data->update($request->all());
        return redirect('/super/barangkeluar/frameoriginal')->with('sukses');
    }

    public function deleteframeoriginalkeluar($id)
    {
        $data = frameoriginal_keluar::FindOrFail($id);
        $data->delete();
        return redirect('/super/barangkeluar/frameoriginal')->with('hapus');
    }
}
