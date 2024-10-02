<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LuasLingkaranController extends Controller
{
    public function hitungLuasLingkaran(Request $request)
    {
        $jariJari = $request->jariJari;
        $luas = pi() * pow($jariJari, 2);
        
        return new PostResource(true, 'Berhasil hitung luas lingkaran', [
            'hasil' => $luas
        ]);
    }
}
