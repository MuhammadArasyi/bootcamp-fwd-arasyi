<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RoleUser extends Model
{
      // use HasFactory;
      use SoftDeletes;

      public $table = 'role_user';
  
      protected $dates = [
          'created_ad',
          'updated_at',
          'deleted_at'
      ];
  
      protected $fillable = [
          'role_id',
          'user_id',
          'created_ad',
          'updated_at',
          'deleted_at'
      ];

      public function consultation()
    {   //3 parameter(path,foreign key, primary key dari table has many)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function role()
    {   //3 parameter(path,foreign key, primary key dari table has many)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
