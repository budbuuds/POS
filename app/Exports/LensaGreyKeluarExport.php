<?php

namespace App\Exports;

use App\lensa_grey_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaGreyKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarlg', [
            'datas' => lensa_grey_keluar::all()
        ]);
    }
}
