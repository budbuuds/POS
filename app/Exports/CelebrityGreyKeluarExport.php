<?php

namespace App\Exports;

use App\celebrity_grey_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityGreyKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarcg', [
            'datas' => celebrity_black_keluar::all()
        ]);
    }
}
