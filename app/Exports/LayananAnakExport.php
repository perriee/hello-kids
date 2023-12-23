<?php

namespace App\Exports;

use App\Models\LayananAnak;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LayananAnakExport implements FromCollection, WithHeadings
{
    protected $layanan_anak;

    public function __construct($layanan_anak)
    {
        $this->layanan_anak = $layanan_anak;
    }

    public function collection()
    {
        return $this->layanan_anak;
    }

    public function headings(): array
    {
        return [
            'No',
            'Lingkar Kepala',
            'Tinggi Badan',
            'Berat Badan',
            'IMT',
            'Status BB',
            'Saran',
            'Jadwal Periksa',
        ];
    }
}
