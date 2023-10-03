<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruttien extends Model
{
    use HasFactory;
    protected $table = 'tbl_ruttien';
    public $primaryKey = 'id';
    protected $fillable = [
        'tknganhang',
        'thongtin',
        'sotienrut',
    ];
}
