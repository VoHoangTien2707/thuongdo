<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    use HasFactory;
    protected $table = 'tbl_nhacungcap';
    public $primaryKey = 'id';
    protected $fillable = [
        'tenncc',
        'diachi',
        'website',
        'img',
        'tongtiendathang',
        'tongkhieunai',
        'nganhkinhdoanh',
        'idorder',
        'thongtin',
        'nguoidaidien',
        'lienhe',
        'chucvu',
        'nganhang',
        'stk',
        'chutaikhoan',
    ];
}
