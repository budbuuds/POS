<?php

namespace App\Exports;

use App\framebpjs_masuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class FrameBpjsMasukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return framebpjs_masuk::all();
    }
}
