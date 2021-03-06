<?php

namespace App\Exports;

use App\frame_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class FrameKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View
    {
        return view('excel.frame_keluar', [
            'datas' => frame_keluar::all()
        ]);
    }
}
