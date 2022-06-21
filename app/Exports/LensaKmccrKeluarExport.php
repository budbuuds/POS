<?php

namespace App\Exports;

use App\lensa_kmccr_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaKmccrKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarlk', [
            'datas' => lensa_kmccr_keluar::all()
        ]);
    }
}
