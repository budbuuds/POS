<?php

namespace App\Exports;

use App\celebrity_black;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityBlackExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.export', [
            'datas' => celebrity_black::all()
        ]);
    }
}
