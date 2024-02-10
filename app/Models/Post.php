<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // !$fillable isi nya boleh diisi dari method create()
    //protected $fillable = ['title', 'excerpt', 'body'];

    // !$guarded isi nya tidak boleh diisi dari method create()
    protected $guarded = ['id'];
}
