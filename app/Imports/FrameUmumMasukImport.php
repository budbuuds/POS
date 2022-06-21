<?php

namespace App\Imports;

use App\frameumum_masuk;
use Maatwebsite\Excel\Concerns\ToModel;

class FrameUmumMasukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new frameumum_masuk([
            //
        ]);
    }
}
