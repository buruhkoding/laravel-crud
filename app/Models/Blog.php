<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    // ini buat yg gaada kolom created_at sama updated_at
    // public $timestamps = false;
    protected $guarded = [];

    use SoftDeletes;
    protected $deleted = ['deleted_at'];
}
