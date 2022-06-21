<?php

namespace App\Exports;

use App\frameoriginal_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class FrameOriginalKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View
    {
        return view('excel.frameoriginal_keluar', [
            'datas' => frameoriginal_keluar::all()
        ]);
    }
}
