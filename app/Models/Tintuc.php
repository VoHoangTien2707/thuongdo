<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    use HasFactory;
    protected $table = 'tbl_tintuc';
    public $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'description',
        'img',
    ];
}
