<?php

namespace App\Exports;

use App\celebrity_brown;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class CelebrityBrownExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.export', [
            'datas' => celebrity_brown::all()
        ]);
    }
}
