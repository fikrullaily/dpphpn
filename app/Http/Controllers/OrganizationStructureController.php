<?php

namespace App\Http\Controllers;

use App\Models\OrganizationStructure;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;

class OrganizationStructureController extends Controller
{
    public $form = [
        [
            'field' => 'organization_file',
            'type'  => 'file',
            'label' => 'Gambar',
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
            $data = OrganizationStructure::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('master-organization-structure/' . $row->id . '/edit') . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm">Edit</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.master.organization-structure.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr = [
            'form' => $this->form,
            'action' => 'create'
        ];

        return view('pages.admin.master.organization-structure.form', $arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrganizationStructure  $organizationStructure
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationStructure $organizationStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrganizationStructure  $organizationStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationStructure $organizationStructure, $id)
    {
        $a = OrganizationStructure::where('id', $id)->first()->toArray();

        $data = [
            'data' => $a,
            'form' => $this->form,
            'action' => 'edit'
        ];

        return view('pages.admin.master.organization-structure.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrganizationStructure  $organizationStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = session()->get('admin');

        $rules = [];

        foreach ($this->form as $key => $value) {
            $a = $value['field'] . '_hidden';
            $hide = $request->$a;
            if (!isset($hide)) {
                $rules[$value['field']] = $value['rules'];
            } else {
                $request->merge([str_replace('_hiden', '', $value['field']) => $hide]);
                unset($request->$a);
            }
        }

        $validated = $request->validate($rules);

        $post = [
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $old_data = OrganizationStructure::where('id', $id)->first();

        foreach ($request->file() as $key => $value) {
            $document_file = $key . '_' . date('dmY') . '_' . time() . '.' . $request->$key->extension();
            $post[$key] = $document_file;
            if (File::exists(public_path('uploads/' . $key . '/' . $old_data->$key))) {
                unlink(public_path('uploads/' . $key . '/' . $old_data->$key));
            }
            $request->file($key)->move(public_path('uploads/' . $key), $document_file);
        }

        OrganizationStructure::where('id', $id)->update($post);
        return redirect(url('master-organization-structure'))->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrganizationStructure  $organizationStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = OrganizationStructure::destroy($id);

        if ($delete) {
            return response()->json(['status' => 200, 'message' => 'Data berhasil dihapus']);
        } else {
            return response()->json(['status' => 500, 'message' => 'Gagal Terjadi Kesahalan']);
        }
    }
}
