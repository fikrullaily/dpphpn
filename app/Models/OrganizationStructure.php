<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationStructure extends Model
{
    use HasFactory;
    protected $table = 'organization_structures';
    protected $fillable = [
        'organization_file',
        'created_at',
        'updated_at',
    ];
}
