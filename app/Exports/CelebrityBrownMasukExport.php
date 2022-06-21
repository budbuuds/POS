<?php

namespace App\Exports;

use App\celebrity_brown_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityBrownMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukcr', [
            'datas' => celebrity_brown_masuk::all()
        ]);
    }
}
