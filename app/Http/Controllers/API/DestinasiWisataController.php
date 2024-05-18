<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama_destinasi');
        $deskripsi = $request->input('deskripsi');
        $gambar = $request->input('gambar');

        $query = Destination::query();

        if ($id) {
            $destination = $query->with('paket')->find($id);
            if ($destination) {
                return ResponseFormatter::success($destination, 'Data destinasi berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data destinasi tidak ada', 404);
            }
        }

        if ($nama) {
            $query->where('nama_destinasi', 'like', '%' . $nama . '%');
        }
        if ($deskripsi) {
            $query->where('deskripsi', 'like', '%' . $deskripsi . '%');
        }
        if ($gambar) {
            $query->where('gambar', 'like', '%' . $gambar . '%');
        }

        return ResponseFormatter::success($query->paginate($limit), 'Data destinasi berhasil diambil');
    }
}
