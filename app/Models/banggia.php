<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banggia extends Model
{
    use HasFactory;
    protected $table = 'tbl_banggia';
    public $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
    ];
}
