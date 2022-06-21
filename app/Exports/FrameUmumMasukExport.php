<?php

namespace App\Exports;

use App\frameumum_masuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class FrameUmumMasukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return frameumum_masuk::all();
    }
}
