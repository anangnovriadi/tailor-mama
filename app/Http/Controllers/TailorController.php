<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tailor;
use App\Model\Customer;

class TailorController extends Controller
{
    public function index()
    {
        $tailors = Tailor::with('customer')->get();

        return view('admin.jahitan.index', compact('tailors'));
    }

    public function create()
    {
        $customers = Customer::all();

        return view('admin.jahitan.create', compact('customers'));
    }

    public function store(Request $request)
    {
        Tailor::create([
            'nama_jahitan' => $request->input('nama_jahitan'),
            'id_pelanggan' => $request->input('id_pelanggan'),
            'ongkos_jahitan' => $request->input('ongkos'),
            'jumlah_jahitan' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
            'estimasi_selesai' => $request->input('estimasi_selesai'),
            'tgl_masuk' => $request->input('tanggal_masuk'),
            'tgl_diambil' => $request->input('tanggal_diambil')
        ]);

        return redirect()->route('tailor.index'); 
    }

    public function edit(Request $request, $id)
    {
        $tailor = Tailor::find($id);
        $customers = Customer::all();

        return view('admin.jahitan.edit', compact('tailor', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $tailor = Tailor::find($id);

        $tailor->update([
            'nama_jahitan' => $request->input('nama_jahitan'),
            'id_pelanggan' => $request->input('id_pelanggan'),
            'ongkos_jahitan' => $request->input('ongkos'),
            'jumlah_jahitan' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
            'estimasi_selesai' => $request->input('estimasi_selesai'),
            'tgl_masuk' => $request->input('tanggal_masuk'),
            'tgl_diambil' => $request->input('tanggal_diambil')
        ]);

        return redirect()->route('tailor.index');
    }

    public function destroy($id)
    {
        $tailor = Tailor::find($id);

        $tailor->delete();

        return redirect()->route('tailor.index');
    }
}
