<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WallboardController extends Controller
{
    function insert(Request $request)
    {
        $interval = $request->input('interval');
        $rrkjp = $request->input('rata-rata_Kecepatan_Jawab_Panggilan_(detik)');
        $rrwptt = $request->input('rata-rata_Waktu_Panggilan_Tidak_Terjawab');
        $rrwb= $request->input('rata-rata_Waktu_Bicara');
        $jpt= $request->input('jumlah_Panggilan_Terjawab');
        $jptt = $request->input('jumlah_Panggilan_Tidak_Terjawab');
        $jpm = $request->input('jumlah_Panggilan_Masuk');
        $pp = $request->input('panggilan_Perposisi');
        $rral = $request->input('rata-rata_Agent_Login ');
        $twb = $request->input('total_Waktu_Bicara');
        $wpt = $request->input('waktu_Panggilan_Terjawab');
        $ppt = $request->input('panggilan_Terjawab');
        $sl = $request->input('service_Level');

        $data = array('interval'=>$interval,"rata-rata_Kecepatan_Jawab_Panggilan_(detik)"=>$rrkjp,
        "rata-rata_Waktu_Panggilan_Tidak_Terjawab"=>$rrwptt,
        "rata-rata_Waktu_Bicara"=>$rrwb,
        "jumlah_Panggilan_Terjawab"=>$jpt,
        "jumlah_Panggilan_Tidak_Terjawab"=>$jptt,
        "jumlah_Panggilan_Masuk"=>$jpm,
        "panggilan_Perposisi"=>$pp,
        "rata-rata_Agent_Login"=>$rral,
        "total_Waktu_Bicara"=>$twb,
        "waktu_Panggilan_Terjawab"=>$wpt,
        "panggilan_Terjawab"=>$pt,
        "service_Level"=>$sl
        );

        DB::table('wallboard')->insert($data);

    }
}
