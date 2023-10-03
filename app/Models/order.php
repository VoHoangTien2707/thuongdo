<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'tbl_order';
    public $primaryKey = 'id';
    protected $fillable = [
        'tensp',
        'img',
        'chitietsp',
        'link',
        'gia',
        'soluong',
        'thanhtien',
        'van_chuyen',
        'thongtin',
        'iduser',
        'trangthai',
    ];
}
