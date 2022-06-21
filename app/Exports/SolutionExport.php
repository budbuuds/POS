<?php

namespace App\Exports;

use App\solution;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SolutionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    use Exportable;

     public function view(): View
    {
        return view('excel.export', [
            'datas' => solution::all()
        ]);
    }
}
