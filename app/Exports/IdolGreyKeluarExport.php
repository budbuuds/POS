<?php

namespace App\Exports;

use App\idol_grey_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class IdolGreyKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarig', [
            'datas' => idol_grey_keluar::all()
        ]);
    }
}
