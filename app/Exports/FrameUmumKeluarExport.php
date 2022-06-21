<?php

namespace App\Exports;

use App\frameumum_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class FrameUmumKeluarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return frameumum_keluar::all();
    }
}
