<?php

namespace App\Imports;

use App\idol_grey;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IdolGreyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new idol_grey([
            'ukuran' => $row['ukuran_lensa'],
            'stock'  => $row['jumlah_lensa'],
        ]);
    }
}
