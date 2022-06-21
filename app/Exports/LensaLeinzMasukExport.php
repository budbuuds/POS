<?php

namespace App\Exports;

use App\lensa_leinz_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaLeinzMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukll', [
            'datas' => lensa_leinz_masuk::all()
        ]);
    }
}
