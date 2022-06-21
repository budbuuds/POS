<?php

namespace App\Exports;

use App\solution_masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SolutionMasukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.masuks', [
            'datas' => solution_masuk::all()
        ]);
    }
}
