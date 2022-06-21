<?php

namespace App\Exports;

use App\lensa_block_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaBlockMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuklb', [
            'datas' => lensa_block_masuk::all()
        ]);
    }
}
