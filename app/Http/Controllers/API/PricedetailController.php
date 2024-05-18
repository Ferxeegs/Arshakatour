<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pricedetail;
use Illuminate\Http\Request;

class PricedetailController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $jumlah_peserta = $request->input('jumlah_peserta');
        $harga = $request->input('harga');
        $paketwisatas_id = $request->input('paketwisatas_id');

        $query = Pricedetail::with('paketWisata');

        if ($id) {
            $pricedetail = $query->find($id);
            if ($pricedetail) {
                return ResponseFormatter::success($pricedetail, 'Data pricedetail berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data pricedetail tidak ada', 404);
            }
        }

        if ($jumlah_peserta) {
            $query->where('jumlah_peserta', 'like', '%' . $jumlah_peserta . '%');
        }

        if ($harga) {
            $query->where('harga', 'like', '%' . $harga . '%');
        }

        if ($paketwisatas_id) {
            $query->where('paketwisatas_id', $paketwisatas_id);
        }

        return ResponseFormatter::success($query->paginate($limit), 'Data pricedetail berhasil diambil');
    }
}
