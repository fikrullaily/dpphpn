<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveMessage;
use App\Http\Requests\SaveRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $auth = Page::get_administrator($request->username, $request->password);

        if ($auth) {
            return redirect(url('dashboard'))->with('status', 'Berhasil Login');
        } else {
            return redirect(url('/login'))->with('status', 'Gagal login');
        }
    }

    public function home()
    {
        $view = [
            'news' => Page::get_news(),
            'body_id' => 'home-page'
        ];

        return view('pages.user.home', $view);
    }

    public function news($category)
    {
        $view = [
            'news' => Page::get_news_by_category(),
            'body_id' => 'news-page',
            'category' => $category
        ];

        return view('pages.user.news', $view);
    }

    public function catalog()
    {
        $view = [
            'catalogs' => Page::get_catalogs(),
            'body_id' => 'catalog-page',
        ];

        return view('pages.user.catalog', $view);
    }

    public function logout()
    {
        session()->flush();
        return redirect(url('/login'));
    }

    public function template($page)
    {
        return view('template.user.' . $page);
    }

    public function send_message(SaveMessage $request)
    {
        $request->merge(['created_at' => now('UTC')]);

        $save = Page::save_message($request->except('_token'));
        if ($save) {
            return redirect()->to(url('/'))->with('success', 'Berhasil mengirim email');
        } else {
            return redirect()->to(url('/'))->with('failed', 'Gagal mengirim email');
        }
    }

    public function detail_news($id)
    {
        $view = [
            'detail' => Page::get_detail_news($id),
            'body_id' => 'detail-news',
        ];

        return view('pages.user.detail-news', $view);
    }

    public function profile_lembaga()
    {
        $view = [
            'body_id' => ''
        ];

        return view('pages.user.profile-lembaga', $view);
    }

    public function struktur_organisasi()
    {
        $view = [
            'detail' => Page::get_struktur_organisasi(),
            'body_id' => 'struktur-organisasi'
        ];

        return view('pages.user.struktur-organisasi', $view);
    }

    public function profile_dpphpn()
    {
        $view = [
            'data' => Page::get_profile_dpphpn(),
            'body_id' => 'profile'
        ];

        return view('pages.user.profile-dpphpn', $view);
    }

    public function program_kerja()
    {
        $view = [
            'data' => Page::get_program_kerja(),
            'body_id' => 'program-kerja'
        ];

        return view('pages.user.program-kerja', $view);
    }

    public function detail_catalog($id)
    {
        $view = [
            'detail' => Page::get_detail_catalog($id),
            'body_id' => '',
        ];

        return view('pages.user.detail-catalog', $view);
    }

    public function daftar_dpwdpc()
    {
        $view = [
            'data' => Page::get_daftar_dpwdpc(),
            'body_id' => 'daftar-dpw'
        ];

        return view('pages.user.daftar-dpwdpc', $view);
    }

    public function send_request(SaveRequest $request)
    {
        $request->merge(['created_at' => now('UTC')]);
        $save = Page::send_request($request->except('_token'));
        return response()->json(['message' => 'success']);
    }
}
