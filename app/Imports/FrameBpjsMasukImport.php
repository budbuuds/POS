<?php

namespace App\Imports;

use App\framebpjs_masuk;
use Maatwebsite\Excel\Concerns\ToModel;

class FrameBpjsMasukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new framebpjs_masuk([
            //
        ]);
    }
}
