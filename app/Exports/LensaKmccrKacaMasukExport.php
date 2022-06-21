<?php

namespace App\Exports;

use App\lensa_kmccrkaca_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaKmccrKacaMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklkk', [
            'datas' => lensa_kmccrkaca_masuk::all()
        ]);
    }
}
