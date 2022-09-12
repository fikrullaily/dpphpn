<?php

namespace App\Http\Controllers;

use App\Models\VisionMission;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class VisionMissionController extends Controller
{
    public $form = [
        [
            'field' => 'description',
            'type'  => 'textarea',
            'label' => 'Deskripsi',
            'placeholder' => '',
            'rules' => 'required'
        ],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = VisionMission::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('master-vision/' . $row->id . '/edit') . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm">Edit</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.master.vision-mission.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisionMission  $visionMission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = VisionMission::where('id', $id)->first()->toArray();

        $data = [
            'data' => $a,
            'form' => $this->form,
            'action' => 'edit'
        ];

        return view('pages.admin.master.vision-mission.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisionMission  $visionMission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = session()->get('admin');

        $rules = [];

        foreach ($this->form as $key => $value) {
            $rules[$value['field']] = $value['rules'];
        }

        $validated = $request->validate($rules);

        $post = [
            'description' => $request->description,
            'updated_by' => $admin['user_id'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        VisionMission::where('id', $id)->update($post);
        return redirect(url('master-vision'))->with('status', 'Data berhasil diubah');
    }
}
