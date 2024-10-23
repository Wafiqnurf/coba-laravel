<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatatanController extends Controller
{
    public function index()
    {
        $records = Catatan::where('user_id', auth()->id())->orderBy('tanggal', 'desc')->get();

        $chartData = Catatan::select('tanggal', 'gula_darah', 'tensi', DB::raw('SUBSTRING_INDEX(tensi, "/", 1) as sistolik'))
            ->where('user_id', auth()->id()) // Ambil hanya catatan pengguna yang sedang login
            ->orderBy('tanggal')
            ->get();

        $chart = (new LarapexChart)->lineChart()
            ->addData('Gula Darah', $chartData->pluck('gula_darah')->toArray())
            ->addData('Tekanan Darah (Sistolik)', $chartData->pluck('tensi')->toArray())
            ->setXAxis($chartData->pluck('tanggal')->toArray());

        return view('catatan.index', compact('records', 'chart'));
    }

    public function create()
    {
        return view('catatan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'gula_darah' => 'nullable|numeric',
            'tensi' => 'nullable|numeric',
            'pesan_dokter' => 'nullable|string',
        ]);

        // Tambahkan user_id ke validated data
        $validatedData['user_id'] = auth()->id(); // Menambahkan ID pengguna yang sedang login

        Catatan::create($validatedData);
        return redirect()->route('catatan')->with('success_add', 'Catatan kesehatan berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $record = Catatan::find($id);
        $record->delete();

        return redirect()->route('catatan')->with('success_delete', 'Catatan kesehatan berhasil dihapus.');
    }
}
