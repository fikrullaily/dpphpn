<?php

namespace App\Http\Controllers;

use App\Models\RequestNews;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class RequestNewsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RequestNews::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }

        return view('pages.admin.master.request-news.list');
    }
}
