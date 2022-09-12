<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class MessageController extends Controller
{
    public $form = [
        [
            'field' => 'name',
            'type'  => 'text',
            'label' => 'Nama',
        ],
        [
            'field' => 'email',
            'type'  => 'text',
            'label' => 'Email',
        ],
        [
            'field' => 'subject',
            'type'  => 'text',
            'label' => 'Subjek',
        ],
        [
            'field' => 'message',
            'type'  => 'textarea',
            'label' => 'Pesan',
        ],
    ];

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Message::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('view-request/' . $row->id) . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm">Lihat</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.master.request.list');
    }

    public function view($id)
    {
        $a = Message::where('id', $id)->first()->toArray();

        $data = [
            'data' => $a,
            'form' => $this->form
        ];

        return view('pages.admin.master.request.view', $data);
    }
}
