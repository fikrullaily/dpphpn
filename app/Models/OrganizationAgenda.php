<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationAgenda extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'organization_agendas';
    protected $fillable = [
        'description',
        'agenda_file',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
