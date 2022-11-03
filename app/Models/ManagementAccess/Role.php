<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
    use SoftDeletes;

    public $table = 'role';

    protected $dates = [
        'created_ad',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'created_ad',
        'updated_at',
        'deleted_at'
    ];
}
