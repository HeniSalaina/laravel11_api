<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class KelilingLingkaranController extends Controller
{
    public function hitungKelilingLingkaran(Request $request)
    {
        $jariJari = $request->jariJari;
        $keliling = 2 * pi() * $jariJari;
        
        return new PostResource(true, 'Berhasil hitung keliling lingkaran', [
            'hasil' => $keliling
        ]);
    }
}
