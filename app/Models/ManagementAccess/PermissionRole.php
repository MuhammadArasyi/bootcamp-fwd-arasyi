<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PermissionRole extends Model
{
      // use HasFactory;
      use SoftDeletes;

      public $table = 'permission_role';
  
      protected $dates = [
          'created_ad',
          'updated_at',
          'deleted_at'
      ];
  
      protected $fillable = [
          'permission_id',
          'role_id',
          'created_ad',
          'updated_at',
          'deleted_at'
      ];

      public function permission()
    {   //3 parameter(path,foreign key, primary key dari table has many)
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }
    public function role()
    {   //3 parameter(path,foreign key, primary key dari table has many)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
