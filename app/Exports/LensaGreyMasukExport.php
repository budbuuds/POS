<?php

namespace App\Exports;

use App\lensa_grey_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaGreyMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklg', [
            'datas' => lensa_grey_masuk::all()
        ]);
    }
}
