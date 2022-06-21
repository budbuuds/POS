<?php

namespace App\Exports;

use App\celebrity_brown_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityBrownKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarcr', [
            'datas' => celebrity_brown_keluar::all()
        ]);
    }
}
