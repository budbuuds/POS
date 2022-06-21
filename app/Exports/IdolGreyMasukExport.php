<?php

namespace App\Exports;

use App\idol_grey_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class IdolGreyMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukig', [
            'datas' => idol_grey_masuk::all()
        ]);
    }
}
