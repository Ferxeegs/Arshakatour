<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Subdestination;
use Illuminate\Http\Request;

class SubdestinasiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $subdestinasi = $request->input('subdestinasi');
        $paketwisatas_id = $request->input('paketwisatas_id');

        $query = Subdestination::with('paketWisatas');

        if ($id) {
            $subdestination = $query->find($id);
            if ($subdestination) {
                return ResponseFormatter::success($subdestination, 'Data subdestinasi berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data subdestinasi tidak ada', 404);
            }
        }

        if ($subdestinasi) {
            $query->where('subdestinasi', 'like', '%' . $subdestinasi . '%');
        }

        if ($paketwisatas_id) {
            $query->where('paketwisatas_id', $paketwisatas_id);
        }

        return ResponseFormatter::success($query->paginate($limit), 'Data subdestinasi berhasil diambil');
    }
}