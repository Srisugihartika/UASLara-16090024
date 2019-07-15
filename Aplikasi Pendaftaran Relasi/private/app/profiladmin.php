<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profiladmin extends Model
{
    protected $table = 'profiladmins';
    protected $guarded =[];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
