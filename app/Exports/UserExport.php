<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\User;
use DB;

class UserExport implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Scan tabungan'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $asset_url = asset("storage/");
        $result = User::where('role','member')->select("name", "email", \DB::raw("CONCAT('$asset_url/', scan_tabungan) as image_path"))->get();
        return $result;
    }
}
