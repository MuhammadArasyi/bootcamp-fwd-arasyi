<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Specialist extends Model
{
     // use HasFactory;
     use SoftDeletes;

     public $table = 'specialist';
 
     protected $dates = [
         'created_ad',
         'updated_at',
         'deleted_at'
     ];
 
     protected $fillable = [
         'name',
         'price',
         'created_ad',
         'updated_at',
         'deleted_at'
     ];
     public function doctor()
    {   //2 parameter(path,foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
