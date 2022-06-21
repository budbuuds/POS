<?php

namespace App\Exports;

use App\lensa_mccrkaca_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaMccrKacaMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklmk', [
            'datas' => lensa_mccrkaca_masuk::all()
        ]);
    }
}
