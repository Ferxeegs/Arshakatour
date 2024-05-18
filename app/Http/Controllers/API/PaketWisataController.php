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
        $nama = $request->input('nama_paket');     
        $durasi = $request->input('durasi');
        $gambar = $request->input('gambar');
        $destinasi = $request->input('destinations');

        $query = Paketwisata::with('subdestinasi','destinasi','priceDetails');
        

        if ($id) {
            $product = $query->find($id);
            if ($product) {
                return ResponseFormatter::success($product, 'Data paket berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data paket tidak ada', 404);
            }
        }

        if ($nama) {
            $query->where('nama_paket', 'like', '%' . $nama . '%');
        }

        if ($durasi) {
            $query->where('durasi', 'like', '%' . $durasi . '%');
        }

        if ($destinasi) {
            $query->where('destinations', $destinasi);
        }

        if ($gambar) {
            $query->where('gambar', 'like', '%' . $gambar . '%');
        }

        

        return ResponseFormatter::success($query->paginate($limit), 'Data paket berhasil diambil');
    }
}
