<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index(){
        if (Auth::user()->roles=='user')
        {
            return view('dashboard');
        }
        else
        {
            return view('admin.home');

        }
    }

    public function page(){
        return view('adminpage');
    }

    public function export(){
        // return Excel::download(new UsersExport,'users.csv');
        return Excel::download(new UsersExport,'users.xlsx', ExcelExcel::XLSX);
    }
}
