<?php

namespace App\Imports;

use App\frameumum;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FrameUmumImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new frameumum([
            'kode' => $row['kode_frame'],
            'frame' => $row['nama_frame'],
            'harga' => $row['harga_frame'],
        ]);
    }
}
