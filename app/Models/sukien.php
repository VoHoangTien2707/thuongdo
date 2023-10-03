<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sukien extends Model
{
    use HasFactory;
    protected $table = 'tbl_sukien';
    public $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'description',
        'img',
    ];
}
