<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nganhang extends Model
{
    use HasFactory;
    protected $table = 'tbl_nganhang';
    public $primaryKey = 'id';
    protected $fillable = [
        'nganhang',
        'thongtin',
        'iduser',
    ];
}
