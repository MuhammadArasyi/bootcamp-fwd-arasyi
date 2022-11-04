<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ConfigPayment extends Model
{
     // use HasFactory;
     use SoftDeletes;

     public $table = 'config_payment';
 
     protected $dates = [
         'created_ad',
         'updated_at',
         'deleted_at'
     ];
 
     protected $fillable = [
         'fee',
         'vat',
         'created_ad',
         'updated_at',
         'deleted_at'
     ];
}
