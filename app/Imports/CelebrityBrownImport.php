<?php

namespace App\Imports;

use App\celebrity_brown;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CelebrityBrownImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new celebrity_brown([
            'ukuran' => $row['ukuran_lensa'],
            'stock'  => $row['jumlah_lensa'],
        ]);
    }
}
