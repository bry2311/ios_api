<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class SuratController extends Controller
{
    //
    public function tkData(){
        $data = Surat::where('unit', 'TK')
            ->orderBy('id_surat', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function sdData(){
        $data = Surat::where('unit', 'SD')
            ->orderBy('id_surat', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function smpData(){
        $data = Surat::where('unit', 'SMP')
            ->orderBy('id_surat', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function smaData(){
        $data = Surat::where('unit', 'SMA')
            ->orderBy('id_surat', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }

    public function komplekData(){
        $data = Surat::where('unit', 'Komplek')
            ->orderBy('id_surat', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }
}
