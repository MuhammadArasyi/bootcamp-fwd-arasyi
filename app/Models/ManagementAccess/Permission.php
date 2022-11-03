<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Permission extends Model
{
        // use HasFactory;
    use SoftDeletes;

    public $table = 'permission';

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