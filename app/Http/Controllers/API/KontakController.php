<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $pesan = $request->input('pesan');

        if ($id) {
            $kontak = Kontak::find($id);

            if ($kontak) {
                return ResponseFormatter::success(
                    $kontak,
                    'Data kontak berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data kontak tidak ditemukan',
                    404
                );
            }
        }

        $kontak = Kontak::query();

        if ($nama) {
            $kontak->where('nama', 'like', '%' . $nama . '%');
        }
        if ($pesan) {
            $kontak->where('pesan', 'like', '%' . $pesan . '%');
        }
        if ($telepon) {
            $kontak->where('telepon', 'like', '%' . $telepon . '%');
        }

        return ResponseFormatter::success(
            $kontak->paginate($limit),
            'Data kontak berhasil diambil'
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'pesan' => 'required',
        ]);

        $kontak = Kontak::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'pesan' => $request->pesan,
        ]);

        if ($kontak) {
            return ResponseFormatter::success(
                $kontak,
                'Kontak berhasil disimpan',
                201
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Kontak gagal disimpan',
                500
            );
        }
    }
}
