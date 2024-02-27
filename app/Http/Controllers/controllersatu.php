<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controllersatu extends BaseController
{
    public function soalsatu($input){
        $output = "";
        $curretChar = $input[0];
        $count = 1;

        for($i = 1; $i < strlen($input); $i++){
            if($input[$i] == $curretChar){
                $count++;
            } else{
                $output .= $curretChar . $count;
                $curretChar = $input[$i];
                $count = 1;
            }
        }

        $output .= $curretChar . $count;
        return $output;
    }


    public function urutinArray(){
        $array = [9,3,7,8,2,6,1,4,10,2,2,3];
        $urutin = [];
        $min = min($array);
        $max = max($array);

        for ($i = $min; $i <= $max; $i++){
            foreach($array as $value){
                if($value == $i){
                    $urutin[] = $value;        }
            }
        }
    return $urutin;
    }

    // public function countharaga(Request $request){
    //     $tipe = $request->input('tipe_barang');
    //     $jumlah = $request->input('jumlah');
    //     $hari = $request->input('hari');

    //     $haraga_stuan = ['A' => 99900, 'B' => 49900];
    //     $haraga_akhir = $haraga_stuan[$tipe] * $jumlah;

    
    //     return $haraga_akhir;
    // }
}
