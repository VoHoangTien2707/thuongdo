<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tintuc;
use DB;
class TinTucController extends Controller
{

    function tintuc(){
    $perPage = 6;
    $dv = DB::table('tbl_tintuc')->paginate($perPage); // Corrected line
    $data = ['dv' => $dv];
    return view('Home.tintuc', $data);
}
    function chitiet($id=0){
        $dv= DB::table('tbl_tintuc')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitiettintuc', $data);
    }

    function chitietsk($id=0){
        $dv= DB::table('tbl_sukien')->where('id',$id)->first();
        $data= ['id'=>$id,'dv'=>$dv];
        return view('Home.chitietsukien', $data);
    }
}
