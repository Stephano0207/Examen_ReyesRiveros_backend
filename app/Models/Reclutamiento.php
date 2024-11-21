<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclutamiento extends Model
{
    use HasFactory;
protected $primaryKey='ruc';
protected $fillable=['ruc','fecha','numhijos','sueldo','profesion'];

public $timestamps=false;

}
