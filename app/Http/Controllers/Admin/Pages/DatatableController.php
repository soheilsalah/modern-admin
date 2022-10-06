<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function datatablesApi()
    {
        return view('admin.pages.datatables.datatables-api');
    }

    public function datatablesAJAX()
    {
        return view('admin.pages.datatables.datatables-ajax');
    }

    public function Userdatatable()
    {
        $user = User::get();

        return Datatables::of($user)
        ->editColumn('name', function ($user) {
            return $user->name;
        })
        ->editColumn('email', function ($user) {
            return $user->email;
        })
        ->rawColumns(['name'])
        ->make(true);
    }
}
