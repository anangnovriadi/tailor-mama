<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tailor;
use App\Model\Customer;

class TailorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

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
            'pelanggan_id' => $request->input('pelanggan_id'),
            'ongkos_jahitan' => $request->input('ongkos'),
            'jumlah_jahitan' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
            'estimasi_selesai' => $request->input('estimasi_selesai'),
            'tgl_masuk' => $request->input('tanggal_masuk'),
            'tgl_diambil' => $request->input('tanggal_diambil')
        ]);

        return redirect()->route('tailor.create')->with('alert', 'Success Add!'); 
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

        $this->validate($request, [
            'nama_jahitan' => 'required|min:10',
            'pelanggan_id' => 'required',
            'ongkos_jahitan' => 'required',
            'jumlah_jahitan' => 'required',
            'total_harga' => 'required',
            'estimasi_selesai' => 'required',
            'tgl_masuk' => 'required',
            'tgl_diambil' => 'required'
        ]);

        $tailor->update([
            'nama_jahitan' => $request->input('nama_jahitan'),
            'pelanggan_id' => $request->input('pelanggan_id'),
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
