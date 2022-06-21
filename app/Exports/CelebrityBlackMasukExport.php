<?php

namespace App\Exports;

use App\celebrity_black_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityBlackMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukcb', [
            'datas' => celebrity_black_masuk::all()
        ]);
    }
}
