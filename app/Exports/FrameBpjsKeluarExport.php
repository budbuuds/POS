<?php

namespace App\Exports;

use App\framebpjs_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class FrameBpjsKeluarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return framebpjs_keluar::all();
    }
}
