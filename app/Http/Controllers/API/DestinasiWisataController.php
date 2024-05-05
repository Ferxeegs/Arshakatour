<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $tujuan_wisata = [];
        for ($i = 1; $i <= 5; $i++) {
            $tujuan_wisata[] = $request->input('tujuanwisata'.$i);
        }
        $deskripsi = $request->input('deskripsi');
        $durasi = $request->input('durasi');
        $harga = $request->input('harga');
        $gambar = $request->input('gambar');

        $query = DestinasiWisata::query();

        if ($id) {
            $destination = $query->with('paket')->find($id);
            if ($destination) {
                return ResponseFormatter::success($destination, 'Data destinasi berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data destinasi tidak ada', 404);
            }
        }

        if ($nama) {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        foreach ($tujuan_wisata as $tujuan) {
            if ($tujuan) {
                $query->where(function ($q) use ($tujuan) {
                    for ($i = 1; $i <= 5; $i++) {
                        $q->orWhere('tujuan_wisata'.$i, 'like', '%' . $tujuan . '%');
                    }
                });
            }
        }

        if ($deskripsi) {
            $query->where('deskripsi', 'like', '%' . $deskripsi . '%');
        }

        if ($durasi) {
            $query->where('durasi', 'like', '%' . $durasi . '%');
        }

        if ($harga) {
            $query->where('harga', 'like', '%' . $harga . '%');
        }

        if ($gambar) {
            $query->where('gambar', 'like', '%' . $gambar . '%');
        }

        return ResponseFormatter::success($query->paginate($limit), 'Data destinasi berhasil diambil');
    }
}
