<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'aur_proveedor';
    public $timestamps = false;
    protected $primaryKey = 'aup_id';
    protected $fillable=['aup_name','aup_dennier','aup_meters_threads','aup_type_threads','aup_status'];

}
