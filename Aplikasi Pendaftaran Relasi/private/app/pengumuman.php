<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengumuman extends Model
{
    protected $table = 'pengumumen';
    protected $fillable  =['nama','tanggal', 'file'];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
