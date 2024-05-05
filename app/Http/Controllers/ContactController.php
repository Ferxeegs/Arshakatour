<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'pesan' => 'required',
        ]);

        Kontak::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
