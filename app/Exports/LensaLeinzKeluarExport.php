<?php

namespace App\Exports;

use App\lensa_leinz_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaLeinzKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarll', [
            'datas' => lensa_leinz_keluar::all()
        ]);
    }
}
