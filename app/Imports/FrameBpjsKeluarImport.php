<?php

namespace App\Imports;

use App\framebpjs_keluar;
use Maatwebsite\Excel\Concerns\ToModel;

class FrameBpjsKeluarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new framebpjs_keluar([
            //
        ]);
    }
}
