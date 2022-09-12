<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard.index');
    }
}
