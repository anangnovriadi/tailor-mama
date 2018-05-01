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

    public function store() 
    {
        Customer::create([
            'nama_pelanggan' => request('nama_pelanggan'),
            'email' => request('email'),
            'no_telp' => request('no_telp'),
            'alamat' => request('alamat')
        ]);

        return redirect()->route('customer.create');
    }
}
