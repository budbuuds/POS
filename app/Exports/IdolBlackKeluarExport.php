<?php

namespace App\Exports;

use App\idol_black_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class IdolBlackKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarib', [
            'datas' => idol_black_keluar::all()
        ]);
    }
}
