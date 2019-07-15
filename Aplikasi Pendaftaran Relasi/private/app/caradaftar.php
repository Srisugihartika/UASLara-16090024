<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class caradaftar extends Model
{
    protected $table = 'caradaftars';
    protected $fillable =['nama','alamat','no_hp','email','basis','foto', 'file'];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
