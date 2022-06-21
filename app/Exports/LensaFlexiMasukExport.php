<?php

namespace App\Exports;

use App\lensa_flexi_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaFlexiMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklf', [
            'datas' => lensa_flexi_masuk::all()
        ]);
    }
}
