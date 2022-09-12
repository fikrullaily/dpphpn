<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class DpphpnProfile extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'dpphpn_profiles';
    protected $fillable = [
        'position_id',
        'name',
        'user_file',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function getPosition()
    {
        $data = DB::table('positions')->whereNull('deleted_at')->get();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$value->id] = $value->name;
        }
        return $result;
    }
}
