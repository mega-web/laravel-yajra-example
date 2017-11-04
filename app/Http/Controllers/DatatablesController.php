<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;

class DatatablesController extends Controller
{
    public function index()
    {
        return view('example-01');
    }

    public function anyData()
    {
        return DataTables::of(User::all())->make(true);
    }
}
