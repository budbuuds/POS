<?php

namespace App\Exports;

use App\celebrity_grey_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityGreyMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masukcg', [
            'datas' => celebrity_grey_masuk::all()
        ]);
    }
}
