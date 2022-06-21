<?php

namespace App\Exports;

use App\framebpjs;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class FrameBpjsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function view(): View
    {
        return view('excel.frame', [
            'datas' => framebpjs::all()
        ]);
    }
}
