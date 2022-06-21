<?php

namespace App\Exports;

use App\lensa_block_keluar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LensaBlockKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

     public function view(): View
    {
        return view('excel.keluarlb', [
            'datas' => lensa_block_keluar::all()
        ]);
    }
}
