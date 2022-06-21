<?php

namespace App\Exports;

use App\lensa_mccr_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaMccrMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklm', [
            'datas' => lensa_mccr_masuk::all()
        ]);
    }
}
