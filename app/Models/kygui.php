<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kygui extends Model
{
    use HasFactory;
    protected $table = 'tbl_kygui';
    public $primaryKey = 'id';
    protected $fillable = [
        'img',
        'madon',
        'tensp',
        'sokh',
        'hangvc',
        'chieugui',
        'danhmuc',
        'soluong',
        'giatri',
        'link',
        'ghichu',
        'vanchuyen',
        'khonhanhang',
        'khotrahang',
        'diachi',
        'iduser',
    ];
}
