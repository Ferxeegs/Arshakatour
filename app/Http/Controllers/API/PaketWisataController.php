<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
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
        $durasi = $request->input('durasi');
        $harga = $request->input('harga');
        $detail = [];
        for ($i = 1; $i <= 6; $i++) {
            $detail[] = $request->input('detail'.$i);
        }
        $gambar = $request->input('gambar');
        $destinasi = $request->input('destinasi');

        $query = PaketWisata::with('destinasi');

        if ($id) {
            $product = $query->find($id);
            if ($product) {
                return ResponseFormatter::success($product, 'Data paket berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data paket tidak ada', 404);
            }
        }

        if ($nama) {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        foreach ($tujuan_wisata as $tujuan) {
            if ($tujuan) {
                $query->where(function ($q) use ($tujuan) {
                    $q->where('tujuan_wisata1', 'like', '%' . $tujuan . '%')
                        ->orWhere('tujuan_wisata2', 'like', '%' . $tujuan . '%')
                        ->orWhere('tujuan_wisata3', 'like', '%' . $tujuan . '%')
                        ->orWhere('tujuan_wisata4', 'like', '%' . $tujuan . '%')
                        ->orWhere('tujuan_wisata5', 'like', '%' . $tujuan . '%');
                });
            }
        }

        if ($harga) {
            $query->where('harga', '>=', $harga);
        }

        if ($durasi) {
            $query->where('durasi', 'like', '%' . $durasi . '%');
        }

        if ($destinasi) {
            $query->where('destinasi', $destinasi);
        }

        if ($gambar) {
            $query->where('gambar', 'like', '%' . $gambar . '%');
        }

        foreach ($detail as $dt) {
            if ($dt) {
                $query->where(function ($q) use ($dt) {
                    $q->where('detail1', 'like', '%' . $dt . '%')
                        ->orWhere('detail2', 'like', '%' . $dt . '%')
                        ->orWhere('detail3', 'like', '%' . $dt . '%')
                        ->orWhere('detail4', 'like', '%' . $dt . '%')
                        ->orWhere('detail5', 'like', '%' . $dt . '%')
                        ->orWhere('detail6', 'like', '%' . $dt . '%');
                });
            }
        }

        return ResponseFormatter::success($query->paginate($limit), 'Data paket berhasil diambil');
    }
}
