<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit') ?? 100; // Jika limit tidak disertakan, maka defaultnya adalah 10

        if ($id) {
            $reservation = Reservations::find($id);

            if ($reservation) {
                return ResponseFormatter::success(
                    $reservation,
                    'Data reservasi berhasil ditemukan'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data reservasi tidak ditemukan',
                    404
                );
            }
        }

        $reservations = Reservations::query();

        return ResponseFormatter::success(
            $reservations->paginate($limit),
            'Data reservasi berhasil diambil'
        );
    }

    public function store(Request $request)
    {
        // Validasi input menggunakan metode validate dari request
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah_peserta' => 'required|integer|min:1',
            'pilihan_paket' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'telepon' => 'required|string|max:20', // sesuaikan dengan tipe dan panjang kolom telepon
            'pesan' => 'nullable|string', // tambahkan validasi pesan sebagai string opsional
            // Anda bisa menambahkan validasi lain sesuai kebutuhan
        ]);

        // Simpan data reservasi ke dalam database
        $reservation = Reservations::create([
            'nama' => $validatedData['nama'],
            'jumlah_peserta' => $validatedData['jumlah_peserta'],
            'pilihan_paket' => $validatedData['pilihan_paket'],
            'tanggal' => $validatedData['tanggal'],
            'telepon' => $validatedData['telepon'], // menyertakan nilai telepon
            'pesan' => $validatedData['pesan'], // menyertakan nilai pesan jika ada
            // Anda bisa menambahkan field lain sesuai kebutuhan
        ]);

        // Berikan respons berhasil jika penyimpanan berhasil
        if ($reservation) {
            return ResponseFormatter::success(
                $reservation,
                'Reservasi berhasil disimpan'
            );
        } else {
            // Berikan respons error jika terjadi kesalahan saat menyimpan
            return ResponseFormatter::error(
                null,
                'Gagal menyimpan reservasi',
                500
            );
        }
    }
}
