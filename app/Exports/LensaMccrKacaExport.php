<?php

namespace App\Exports;

use App\lensa_mccrkaca;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaMccrKacaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function view(): View
   {
       return view('excel.export', [
           'datas' => lensa_mccrkaca::all()
       ]);
   }
}
