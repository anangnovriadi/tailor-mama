<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Pakaian;
use App\Model\Tailor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakaian = Pakaian::all()->count();
        $tailor = Tailor::all()->count();
        $customer = Customer::all()->count();

        return view('admin.home', compact('pakaian', 'tailor', 'customer'));
    }
}
