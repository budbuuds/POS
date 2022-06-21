<?php

namespace App\Imports;

use App\lensa_mccr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LensaMccrImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new lensa_mccr
        ([
            'ukuran' => $row['ukuran_lensa'],
            'stock'  => $row['jumlah_lensa'],
        ]);
    }
}
