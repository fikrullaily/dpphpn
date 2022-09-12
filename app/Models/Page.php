<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    public static function get_administrator($username, $password)
    {
        $user = DB::table('administrators')->where(['username' => $username, 'password' => $password, 'deleted_at' => null]);
        if ($user->count() > 0) {
            $user = $user->first();
            session()->put('admin', ['user_id' => $user->administrator_id, 'name' => $user->name, 'role_id' => $user->role_id]);
            return true;
        } else {
            return false;
        }
    }

    public static function get_news()
    {
        $data = DB::table('news')->latest()->limit(3)->get();
        return $data;
    }

    public static function get_news_by_category()
    {
        $grouping = [];
        $data = DB::table('news')->latest()->get();

        foreach ($data as $key => $value) {
            $grouping[$value->category][] = $value;
        }
        return $grouping;
    }

    public static function get_catalogs()
    {
        $data = DB::table('catalogs')->latest()->get();
        return $data;
    }

    public static function save_message($data)
    {
        $save = DB::table('messages')->insert($data);
        return $save;
    }

    public static function get_detail_news($id)
    {
        $data = DB::table('news')->find($id);
        return $data;
    }

    public static function get_struktur_organisasi()
    {
        $data = DB::table('organization_structures')->first();
        return $data;
    }

    public static function get_profile_dpphpn()
    {
        $data = DB::table('dpphpn_profiles')
            ->select('positions.name as position', 'dpphpn_profiles.*')
            ->join('positions', 'positions.id', '=', 'dpphpn_profiles.position_id')
            ->whereNull('dpphpn_profiles.deleted_at')
            ->orderBy('positions.id', 'ASC')
            ->get();

        $grouping = [];
        foreach ($data as $key => $value) {
            $grouping[$value->position][] = $value;
        }

        return $grouping;
    }

    public static function get_program_kerja()
    {
        $get_vision_mission = DB::table('vision_missions')->get()->toArray();
        $get_agenda = DB::table('organization_agendas')->orderBy('date', 'DESC')->get();
        $get_work_program = DB::table('work_programs')->first();

        return [
            'vision' => $get_vision_mission[0],
            'mission' => $get_vision_mission[1],
            'agenda' => $get_agenda,
            'work_program' => $get_work_program
        ];
    }

    public static function get_detail_catalog($id)
    {
        $data = DB::table('catalogs')->find($id);
        return $data;
    }

    public static function get_daftar_dpwdpc()
    {
        $data = DB::table('regions')->where(['deleted_at' => null])->get();
        return $data;
    }

    public static function send_request($data)
    {
        $save = DB::table('news_requests')->insert($data);
        return $save;
    }
}
