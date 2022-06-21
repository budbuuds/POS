<?php

namespace App\Imports;

use App\framebpjs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FrameBpjsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new framebpjs([
            'kode' => $row['kode_frame'],
            'frame' => $row['nama_frame'],
            'harga' => $row['harga_frame'],
        ]);
    }
}
