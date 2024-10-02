<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LuasPersegiPanjangController extends Controller
{
    public function hitungPersegiPanjang(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $hitung = $panjang * $lebar;
        
        return new PostResource(true, 'Berhasil hitung luas persegi panjang', [
            'hasil' => $hitung
        ]);
    }
}
