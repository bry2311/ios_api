<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumentasi;

class DokumentasiController extends Controller
{
    //
    public function tkData(){
        $data = Dokumentasi::where('unit', 'TK')
            ->orderBy('kd_post', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function sdData(){
        $data = Dokumentasi::where('unit', 'SD')
            ->orderBy('kd_post', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function smpData(){
        $data = Dokumentasi::where('unit', 'SMP')
            ->orderBy('kd_post', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function smaData(){
        $data = Dokumentasi::where('unit', 'SMA')
            ->orderBy('kd_post', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function komplekData(){
        $data = Dokumentasi::where('unit', 'KOMPLEK')
            ->orderBy('kd_post', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }
}
