<?php

namespace App\Exports;

use App\Rak_buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Buku;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;

class Lihatexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rak_buku::all();
    }
}
