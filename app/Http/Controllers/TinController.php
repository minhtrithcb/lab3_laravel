<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index(){
        return view("index");
    }

    public function tintrongloai($idLT, $pageNum = 1)
    {
        settype($idLT, 'int');
        $list = DB::table('tin')->select("idLT","TieuDe","TomTat","urlHinh","Ngay","idTin")
        ->where('idLT',$idLT)->where('AnHien',1)->paginate(5);

        $TenLT = DB::table('loaitin')->where('idLT',$idLT)->value("Ten");
        $idTL = DB::table('loaitin')->where('idLT',$idLT)->value("idLT");
        $TenTL = DB::table('theloai')->where('idTL',$idTL)->value("TenTL");

        $data = [
            'list' => $list,
            'TenTL' => $TenTL,
            'idTL' => $idTL,
            'idLT'=> $idTL,
            'TenLT' => $TenLT
        ];
        
        return view('tintrongloai',$data);
    }


    public function chitiettin($id){
        $yk = DB::table('ykien')->where('idTin',$id)->where('AnHien',1)->get();
        $kq = DB::table('tin')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        ->where('tin.AnHien',1)->where('tin.idTin',$id)->first();
        
        if ($kq == null) { echo "không tồn tại tin này"; return;}
        // if ($yk == null) {  $yk = 0; }
        $data =['tin' => $kq,'ykien'=> $yk];
        return view('chitiettin',$data);
    }

    public function lienhe(){
        $d=array('title'=>'Liên hệ');
        return view('lienhe',$d);
    }    
 
}
