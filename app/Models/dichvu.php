<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    use HasFactory;
    protected $table = 'tbl_dịchVU';
    public $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
    ];
}
