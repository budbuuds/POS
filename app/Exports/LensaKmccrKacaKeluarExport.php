<?php

namespace App\Exports;

use App\lensa_kmccrkaca_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaKmccrKacaKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function view(): View
   {
       return view('excel.keluarlkk', [
           'datas' => lensa_kmccrkaca_keluar::all()
       ]);
   }
}
