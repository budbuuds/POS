<?php

namespace App\Exports;

use App\lensa_mccr_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaMccrKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarlm', [
            'datas' => lensa_mccr_keluar::all()
        ]);
    }
}
