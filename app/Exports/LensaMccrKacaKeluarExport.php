<?php

namespace App\Exports;

use App\lensa_mccrkaca_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaMccrKacaKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function view(): View
   {
       return view('excel.keluarlmk', [
           'datas' => lensa_mccrkaca_keluar::all()
       ]);
   }
}
