<?php

namespace App\Exports;

use App\idol_brown_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class IdolBrownMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukir', [
            'datas' => idol_brown_masuk::all()
        ]);
    }
}
