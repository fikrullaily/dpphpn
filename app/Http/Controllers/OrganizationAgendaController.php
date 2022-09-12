<?php

namespace App\Http\Controllers;

use App\Models\OrganizationAgenda;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;

class OrganizationAgendaController extends Controller
{
    public $form = [
        [
            'field' => 'description',
            'type'  => 'text',
            'label' => 'Agenda',
            'placeholder' => '',
            'rules' => 'required'
        ],
        [
            'field' => 'agenda_file',
            'type'  => 'file',
            'label' => 'Foto',
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
            $data = OrganizationAgenda::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('agenda_image', function ($row) {
                    $img = '<img src="' . url('uploads/agenda_file/' . $row->agenda_file) . '" style="width:200px;">';
                    return $img;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('master-organization-agenda/' . $row->id . '/edit') . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm">Edit</a>';
                    $btn .= "<form action=" . url('master-organization-agenda/' . $row->id) . " method='POST' class='d-inline process-delete'>
                    <input type='hidden' name='_method' value='delete'>
                    <input type='hidden' name='_token' value=" . csrf_token() . ">
                    <button type='submit' class='btn btn-danger btn-sm'>Hapus</button>
                </form>";
                    return $btn;
                })
                ->rawColumns(['action', 'agenda_image'])
                ->make(true);
        }

        return view('pages.admin.master.organization-agenda.list');
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

        return view('pages.admin.master.organization-agenda.form', $arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = session()->get('admin');

        $rules = [];

        foreach ($this->form as $key => $value) {
            $rules[$value['field']] = $value['rules'];
        }

        $validated = $request->validate($rules);

        $post = [
            'description' => $request->description,
            'created_by' => $admin['user_id'],
            'created_at' => date('Y-m-d H:i:s')
        ];

        foreach ($request->file() as $key => $value) {
            $document_file = $key . '_' . date('dmY') . '_' . time() . '.' . $request->$key->extension();
            $post[$key] = $document_file;
            $request->file($key)->move(public_path('uploads/' . $key), $document_file);
        }

        OrganizationAgenda::create($post);

        return redirect(url('master-organization-agenda'))->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrganizationAgenda  $organizationAgenda
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationAgenda $organizationAgenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrganizationAgenda  $organizationAgenda
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationAgenda $organizationAgenda, $id)
    {
        $a = OrganizationAgenda::where('id', $id)->first()->toArray();

        $data = [
            'data' => $a,
            'form' => $this->form,
            'action' => 'edit'
        ];

        return view('pages.admin.master.organization-agenda.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrganizationAgenda  $organizationAgenda
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
            'description' => $request->description,
            'updated_by' => $admin['user_id'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $old_data = OrganizationAgenda::where('id', $id)->first();

        foreach ($request->file() as $key => $value) {
            $document_file = $key . '_' . date('dmY') . '_' . time() . '.' . $request->$key->extension();
            $post[$key] = $document_file;
            if (File::exists(public_path('uploads/' . $key . '/' . $old_data->$key))) {
                unlink(public_path('uploads/' . $key . '/' . $old_data->$key));
            }
            $request->file($key)->move(public_path('uploads/' . $key), $document_file);
        }

        OrganizationAgenda::where('id', $id)->update($post);
        return redirect(url('master-organization-agenda'))->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrganizationAgenda  $organizationAgenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = OrganizationAgenda::destroy($id);

        if ($delete) {
            return response()->json(['status' => 200, 'message' => 'Data berhasil dihapus']);
        } else {
            return response()->json(['status' => 500, 'message' => 'Gagal Terjadi Kesahalan']);
        }
    }
}
