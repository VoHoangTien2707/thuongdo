<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huongdan extends Model
{
    use HasFactory;
    protected $table = 'tbl_huongdan';
    public $primaryKey = 'id';
    protected $fillable = [
        'title',
        'tomtat',
        'content',
    ];
}
