<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public $form = [
        [
            'field' => 'title',
            'type'  => 'text',
            'label' => 'Judul',
            'placeholder' => '',
            'rules' => 'required'
        ],
        [
            'field' => 'category',
            'type'  => 'dropdown',
            'label' => 'Kategori',
            'placeholder' => '',
            'source' => [
                'Trending' => 'Trending',
                'Daerah' => 'Daerah',
                'Nasional' => 'Nasional',
            ],
            'rules' => 'required'
        ],
        [
            'field' => 'description',
            'type'  => 'textarea',
            'label' => 'Isi berita',
            'placeholder' => '',
            'rules' => 'required'
        ],
        [
            'field' => 'news_file',
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
            $data = News::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('master-news/' . $row->id . '/edit') . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-success btn-sm">Edit</a>';
                    $btn .= "<form action=" . url('master-news/' . $row->id) . " method='POST' class='d-inline process-delete'>
                    <input type='hidden' name='_method' value='delete'>
                    <input type='hidden' name='_token' value=" . csrf_token() . ">
                    <button type='submit' class='btn btn-danger btn-sm'>Hapus</button>
                </form>";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.master.news.list');
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

        return view('pages.admin.master.news.form', $arr);
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
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'created_by' => $admin['user_id'],
            'created_at' => date('Y-m-d H:i:s')
        ];

        foreach ($request->file() as $key => $value) {
            $document_file = $key . '_' . date('dmY') . '_' . time() . '.' . $request->$key->extension();
            $post[$key] = $document_file;
            $request->file($key)->move(public_path('uploads/' . $key), $document_file);
        }

        News::create($post);

        return redirect(url('master-news'))->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, $id)
    {
        $a = News::where('id', $id)->first()->toArray();

        $data = [
            'data' => $a,
            'form' => $this->form,
            'action' => 'edit'
        ];

        return view('pages.admin.master.news.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
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
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'updated_by' => $admin['user_id'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $old_data = News::where('id', $id)->first();

        foreach ($request->file() as $key => $value) {
            $document_file = $key . '_' . date('dmY') . '_' . time() . '.' . $request->$key->extension();
            $post[$key] = $document_file;
            if (File::exists(public_path('uploads/' . $key . '/' . $old_data->$key))) {
                unlink(public_path('uploads/' . $key . '/' . $old_data->$key));
            }
            $request->file($key)->move(public_path('uploads/' . $key), $document_file);
        }

        News::where('id', $id)->update($post);
        return redirect(url('master-news'))->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = News::destroy($id);

        if ($delete) {
            return response()->json(['status' => 200, 'message' => 'Data berhasil dihapus']);
        } else {
            return response()->json(['status' => 500, 'message' => 'Gagal Terjadi Kesahalan']);
        }
    }
}
