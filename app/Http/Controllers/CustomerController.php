<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        $customers = Customer::all();

        return view('admin.customer.index', compact('customers'));
    }

    public function create() 
    {
        return view('admin.customer.create');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'nama_pelanggan' => 'required|min:5',
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required|min:10'
        ]);

        Customer::create([
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat')
        ]);

        return redirect()->route('customer.index');
    }

    public function edit($id) 
    {
        $customer = Customer::find($id);

        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        $customer->update([
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat')
        ]);

        return redirect()->route('customer.index');
    }

    public function destroy($id) 
    {
        $customer = Customer::find($id);

        $customer->delete();

        return redirect()->route('customer.index');
    }
}
