<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

//leweh add put WithHeadings
class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function headings():array
    {
        return ["Name","Email","Roles"];
    }

    public function collection()
    {
        return User::select("name","Email","Roles")->get();
    }
}
