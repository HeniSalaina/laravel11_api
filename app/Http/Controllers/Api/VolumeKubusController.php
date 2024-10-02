<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class VolumeKubusController extends Controller
{
    public function hitungVolumeKubus(Request $request)
    {
        $sisi = $request->sisi;
        $volume = pow($sisi, 3);
        
        return new PostResource(true, 'Berhasil hitung volume kubus', [
            'hasil' => $volume
        ]);
    }
}
